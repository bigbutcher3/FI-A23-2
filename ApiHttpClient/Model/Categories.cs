using System.Text.Json.Serialization;

namespace ApiHttpClient.Model
{
    public class Categories
    {
        [JsonPropertyName("id")]
        public int Id { get; set; }
        [JsonPropertyName("active")]
        public bool Active { get; set; }
        [JsonPropertyName("name")]
        public required string Name { get; set; }
        [JsonPropertyName("position")]
        public int? Position { get; set; }
        [JsonPropertyName("parentId")]
        public int? ParentId { get; set; }
        [JsonPropertyName("mediaId")]
        public int? MediaId { get; set; }
        [JsonPropertyName("childrenCount")]
        public required string ChildrenCount { get; set; }
        [JsonPropertyName("articleCount")]
        public required string ArticleCount { get; set; }
    }

    public class CategoriesResponse : Response
    {
        [JsonPropertyName("data")]
        public List<Categories>? Data { get; set; }
    }
}