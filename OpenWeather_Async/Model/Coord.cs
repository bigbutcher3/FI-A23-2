using System.Text.Json.Serialization;

namespace OpenWeather_Async.Model
{
    public class Coord
    {
        [JsonPropertyName("lon")]
        public double lon { get; set; }

        [JsonPropertyName("lat")]
        public double lat { get; set; }
    }
}