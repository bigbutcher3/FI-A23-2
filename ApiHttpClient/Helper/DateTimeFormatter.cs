using System.Globalization;
using System.Text.Json;
using System.Text.Json.Serialization;

namespace ApiHttpClient.Helper
{
    public class DateTimeFormatter : JsonConverter<DateTime>
    {
        private string format = "yyyy-MM-ddTHH:mm:sszzz";
        public override DateTime Read(ref Utf8JsonReader reader, Type typeToConvert, JsonSerializerOptions options)
        {
            string? dateStr = reader.GetString();
            return DateTime.ParseExact(dateStr, this.format, CultureInfo.InvariantCulture);
        }

        public override void Write(Utf8JsonWriter writer, DateTime value, JsonSerializerOptions options)
        {
            string s = value.ToString(format);
            writer.WriteStringValue(s);
        }
    }
}