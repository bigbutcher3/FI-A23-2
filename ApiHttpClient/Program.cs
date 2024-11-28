using ApiHttpClient.Helper;
using ApiHttpClient.Model;
using System.Net;
using System.Net.Http.Headers;

namespace ApiHttpClient
{
    public class Program
    {
        public static void Main(string[] args)
        {
            const string URL = "http://www.shopware.tld/api/", USER = "apiUser", PASS = "uTw6lCCJe3ztLBGauiJzTugd1ctsXT2v9hnwncV0";
            HttpClient client = new HttpClient(new HttpClientHandler()
            {
                Credentials = new NetworkCredential(USER, PASS)
            });

            client.BaseAddress = new Uri(URL);
            client.DefaultRequestHeaders.Clear();
            client.DefaultRequestHeaders.Accept.Add(new MediaTypeWithQualityHeaderValue("application/json"));

            HttpRestClient restClient = new HttpRestClient(URL, USER, PASS);

            CategoriesDetail newCategory = new CategoriesDetail()
            {
                Changed = DateTime.Now,
                Name = "TestC#",
                Id = 9
            };

            try
            {   // Abfrage über HttpClient
                /*using (HttpResponseMessage response = client.SendAsync(new HttpRequestMessage()
                {
                    RequestUri = new Uri(client.BaseAddress.ToString()),
                    Method = HttpMethod.Get
                }).Result)
                {
                    Console.WriteLine(response.Content.ReadAsStringAsync().Result);
                }*/
                // Abfrage über eigene Klasse
                // restClient.SendData<CategoriesDetail>("categories", CRUD.GET, 8, newCategory);
                restClient.SendData<SendResponse>("categories", HttpMethod.Delete, id: 9);
            }
            catch (Exception x)
            {
                Console.WriteLine(x.Message);
            }
        }
    }
}