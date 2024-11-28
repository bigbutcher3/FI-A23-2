using System.Text.Json;

namespace WebApi01.Helper
{
    static class SerializerHelper
    {
        public static T DeserializeJson<T>(string json)
        {
            return JsonSerializer.Deserialize<T>(json);
        }
    }
}