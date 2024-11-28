using System.Text.Json.Serialization;

namespace ApiHttpClient.Model
{
    public class Response
    {
        [JsonPropertyName("success")]
        public bool Success { get; set; }
        [JsonPropertyName("total")]
        public int? Total { get; set; }
        [JsonPropertyName("message")]
        public string? Message { get; set; }
        [JsonPropertyName("code")]
        public int? Code { get; set; }
    }
}