using System.Net;
using WebApi01.Helper;
using WebApi01.Model;

namespace WebApi01
{
    internal class Program
    {
        const string URL = "http://www.shopware.tld", USER = "apiUser", PASS = "uTw6lCCJe3ztLBGauiJzTugd1ctsXT2v9hnwncV0";

        static void Main(string[] args)
        {
            WebRequest request = (HttpWebRequest)WebRequest.Create(URL + "/api/categories/5");
            request.Method = "GET";
            request.Credentials = new NetworkCredential() { UserName = USER, Password = PASS};
            request.ContentType = "application/json";

            string result;
            //List<Categories> answer = new List<Categories>();
            try
            {
                using (WebResponse response = request.GetResponse())
                {
                    using (StreamReader reader = new StreamReader(response.GetResponseStream()))
                    {
                        result = reader.ReadToEnd();
                        CategoriesDetailResponse r = SerializerHelper.DeserializeJson<CategoriesDetailResponse>(result);
                        /* foreach(CategoriesDetail detail in r.Data)
                        {
                            Console.WriteLine(detail.Name);
                        } */
                        Console.WriteLine(r.Data.Added);
                    }
                }
            }
            catch(WebException ex)
            {
                using (StreamReader sr = new StreamReader(ex.Response.GetResponseStream()))
                {
                    result = sr.ReadToEnd();
                    Response r = SerializerHelper.DeserializeJson<Response>(result);
                    Console.WriteLine(r.Message);
                }
                //Console.WriteLine(ex.Message);
            }
            catch (Exception x)
            {
                Console.WriteLine(x.Message);
            }
        }
    }
}