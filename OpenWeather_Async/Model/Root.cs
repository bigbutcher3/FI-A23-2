using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.Json.Serialization;
using System.Threading.Tasks;

namespace OpenWeather_Async.Model
{
    internal class Root
    {
        // Koordinaten
        [JsonPropertyName("coord")]
        public Coord coord {  get; set; }

        [JsonPropertyName("weather")]
        public List<Weather> weather { get; set; }

        [JsonPropertyName("base")]
        public string @base { get; set; }

        [JsonPropertyName("main")]
        public Main main { get; set; }

        // Sichtweite in Meter
        [JsonPropertyName("visibility")]
        public int visibility { get; set; }

        [JsonPropertyName("wind")]
        public Wind wind { get; set; }

        [JsonPropertyName("clouds")]
        public Clouds clouds { get; set; }

        // Time of data calculation, unix, UTC
        [JsonPropertyName("dt")]
        public int dt { get; set; }

        // Systemdaten
        [JsonPropertyName("sys")]
        public Sys sys { get; set; }

        // Shift in seconds from UTC
        [JsonPropertyName("timezone")]
        public int timezone { get; set; }

        // City ID
        [JsonPropertyName("id")]
        public int id { get; set; }

        // City Name
        [JsonPropertyName("name")]
        public string name { get; set; }

        // Status-Code
        [JsonPropertyName("cod")]
        public int cod { get; set; }
    }
}
