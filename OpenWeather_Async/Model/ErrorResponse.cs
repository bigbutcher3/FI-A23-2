using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.Json.Serialization;
using System.Threading.Tasks;

namespace OpenWeather_Async.Model
{
    internal class ErrorResponse
    {
        [JsonPropertyName("cod")]
        public string Cod { get; set; } // HTTP-Code
        [JsonPropertyName("message")]
        public string Message { get; set; } // zB "city not found"
    }
}
