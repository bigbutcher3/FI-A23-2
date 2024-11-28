using System.Text.Json;

namespace ApiHttpClient.Helper
{
    static class SerializerHelper
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