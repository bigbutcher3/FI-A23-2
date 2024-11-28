using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http.Headers;
using System.Text;
using System.Threading.Tasks;
using ApiHttpClient.Model;

namespace ApiHttpClient.Helper
{
    internal class HttpRestClient : HttpClient
    {
        //private readonly string url, user, pass;
        private static string logPath = Path.GetDirectoryName(Environment.GetCommandLineArgs()[0]);
        private HttpClient httpClient;
        public HttpRestClient(string url, string user, string pass)
        {
#if DEBUG
            httpClient = new HttpClient(new ConsoleLogging()
            {
                InnerHandler = new FileLogging(logPath + "\\rest.log")
                {
                    InnerHandler = new HttpClientHandler()
                    {
                        Credentials = new NetworkCredential(user, pass)
                    }
                }
            });
#else
            httpClient = new HttpClient(new HttpClientHandler()
            {
                Credentials = new NetworkCredential(user, pass)
            });
#endif

            httpClient.BaseAddress = new Uri(url);
            httpClient.DefaultRequestHeaders.Accept.Add(new MediaTypeWithQualityHeaderValue("application/json"));
        }

        public T Get<T>(string endpoint)
        {
            try
            {
                using (HttpResponseMessage response = httpClient.GetAsync(httpClient.BaseAddress + endpoint).Result)
                {
                    return SerializerHelper.DeserializeJson<T>(response.Content.ReadAsStringAsync().Result);
                }
            }
            catch (WebException ex)
            {
                return SerializerHelper.DeserializeJson<T>(ex.Response.GetResponseStream());
            }
            catch (Exception ex)
            {
                throw;
            }
        }

        public SendResponse Post<T>(string endpoint, T data)
        {
            byte[] b = SerializerHelper.Serialize<T>(data);

            try
            {
                using StringContent jsonContent = new(Encoding.UTF8.GetString(b), Encoding.UTF8, "application/json");

                using HttpResponseMessage response = httpClient.PostAsync(endpoint, jsonContent).Result;

                return SerializerHelper.DeserializeJson<SendResponse>(response.Content.ReadAsStringAsync().Result);
            }
            catch (WebException ex)
            {
                return SerializerHelper.DeserializeJson<SendResponse>(ex.Response.GetResponseStream());
            }
            catch (Exception ex)
            {
                throw;
            }
        }

        public SendResponse Put<T>(string endpoint, int id, T data)
        {
            byte[] b = SerializerHelper.Serialize<T>(data);
            string uri = string.Format("{0}{1}/{2}", this.BaseAddress, endpoint, id.ToString());

            try
            {
                using StringContent jsonContent = new(Encoding.UTF8.GetString(b), Encoding.UTF8, "application/json");

                using HttpResponseMessage response = httpClient.PutAsync(uri, jsonContent).Result;

                return SerializerHelper.DeserializeJson<SendResponse>(response.Content.ReadAsStringAsync().Result);
            }
            catch (WebException ex)
            {
                return SerializerHelper.DeserializeJson<SendResponse>(ex.Response.GetResponseStream());
            }
            catch (Exception ex)
            {
                throw;
            }
        }

        public SendResponse Delete(string endpoint, int id)
        {
            string uri = string.Format("{0}{1}/{2}", this.BaseAddress, endpoint, id.ToString());
            try
            {
                using HttpResponseMessage response = httpClient.DeleteAsync(uri).Result;
                return SerializerHelper.DeserializeJson<SendResponse>(response.Content.ReadAsStringAsync().Result);
            }
            catch (WebException ex)
            {
                return SerializerHelper.DeserializeJson<SendResponse>(ex.Response.GetResponseStream());
            }
            catch (Exception ex)
            {
                throw;
            }
        }

        public SendResponse SendData<T>(string endpoint, HttpMethod method, T? data = default, int? id = 0)
        {
            string uri = httpClient.BaseAddress.AbsoluteUri;
            if (method == HttpMethod.Post)
            {
                uri += string.Format(endpoint);
            }
            else if (method == HttpMethod.Put || method == HttpMethod.Delete)
            {
                uri += string.Format("{0}/{1}", endpoint, id.ToString());
            }

            try
            {
                byte[] b = SerializerHelper.Serialize<T>(data);
                HttpRequestMessage requestMessage = new HttpRequestMessage(method, new Uri(uri))
                {
                    Content = new StringContent(Encoding.UTF8.GetString(b), Encoding.UTF8, "application/json")
                };

                using HttpResponseMessage response = httpClient.SendAsync(requestMessage).Result;

                return SerializerHelper.DeserializeJson<SendResponse>(response.Content.ReadAsStringAsync().Result);
            }
            catch (WebException ex)
            {
                return SerializerHelper.DeserializeJson<SendResponse>(ex.Response.GetResponseStream());
            }
            catch (Exception ex)
            {
                throw;
            }
        }

        /* public SendResponse SendData(string endpoint, CRUD operation, int? id)
        {
            if (operation == CRUD.DELETE)
            {
                string uri = string.Format("{0}{1}/{2}", this.BaseAddress, endpoint, id.ToString());
                HttpResponseMessage response = new();
                response = httpClient.DeleteAsync(uri).Result;
                return SerializerHelper.DeserializeJson<SendResponse>(response.Content.ReadAsStringAsync().Result);
            }
            else return new SendResponse();
        } */
    }
}
