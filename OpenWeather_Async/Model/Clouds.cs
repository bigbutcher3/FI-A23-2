using System.Text.Json.Serialization;

namespace OpenWeather_Async.Model
{
    public class Clouds
    {
        // cloudiness, in %
        [JsonPropertyName("all")]
        public int all { get; set; }
    }
}