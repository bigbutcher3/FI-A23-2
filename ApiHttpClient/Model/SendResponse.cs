using System.Text.Json.Serialization;

namespace ApiHttpClient.Model
{
    public class Send
    {
        [JsonPropertyName("id")]
        public int Id { get; set; }
        [JsonPropertyName("location")]
        public string Location;
    }

    public class SendResponse : Response
    {
        [JsonPropertyName("data")]
        public Send? Data { get; set; }
    }
}