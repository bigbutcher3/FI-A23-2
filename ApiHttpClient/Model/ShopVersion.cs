using System.Text.Json.Serialization;

namespace ApiHttpClient.Model
{
    public class ShopVersion
    {
        [JsonPropertyName("version")]
        public required string Version { get; set; }
        [JsonPropertyName("revision")]
        public required string Revision { get; set; }
    }

    public class ShopVersionResponse : Response
    {
        [JsonPropertyName("data")]
        public ShopVersion? Data { get; set; }
    }
}