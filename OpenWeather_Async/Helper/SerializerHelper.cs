using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Text.Json;
using System.Threading.Tasks;

namespace OpenWeather_Async.Helper
{
    internal class SerializerHelper
    {
        public static T DeserializeJson<T>(string json)
        {
            return JsonSerializer.Deserialize<T>(json);
        }

        public static T DeserializeJson<T>(Stream json)
        {
            return JsonSerializer.Deserialize<T>(json);
        }

        public static void Serialize<T>(T obj, out string s)
        {
            s = JsonSerializer.Serialize<T>(obj);
        }

        public static byte[] Serialize<T>(T obj)
        {
            return JsonSerializer.SerializeToUtf8Bytes<T>(obj);
        }
    }
}
