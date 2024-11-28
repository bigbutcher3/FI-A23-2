using System.Text.Json.Serialization;

namespace OpenWeather_Async.Model
{
    public class Weather
    {
        [JsonPropertyName("id")]
        public int id { get; set; }

        // Group of weather parameters
        [JsonPropertyName("main")]
        public string main { get; set; }

        // Weather condition within the group, in selected language
        [JsonPropertyName("description")]
        public string description { get; set; }

        [JsonPropertyName("icon")]
        public string icon { get; set; }
    }
}