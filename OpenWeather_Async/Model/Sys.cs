using System.Text.Json.Serialization;

namespace OpenWeather_Async.Model
{
    /// <summary>
    /// Systemdaten
    /// </summary>
    public class Sys
    {
        [JsonPropertyName("type")]
        public int type { get; set; }

        [JsonPropertyName("id")]
        public int id { get; set; }

        [JsonPropertyName("country")]
        public string country { get; set; }

        // Sunrise time, unix, UTC
        [JsonPropertyName("sunrise")]
        public int sunrise { get; set; }

        // Sunset time, unix, UTC
        [JsonPropertyName("sunset")]
        public int sunset { get; set; } // DateTimeOffset.FromUnixTimeSeconds(umzurechnendeZeit).DateTime
                                        // ggfs. -> .ToLocalTime()
    }
}