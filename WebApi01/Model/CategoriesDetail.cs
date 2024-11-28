using System.ComponentModel;
using System.Text.Json.Serialization;
using WebApi01.Helper;

namespace WebApi01.Model
{
    public class CategoriesDetail
    {
        [JsonPropertyName("id")]
        public int Id { get; set; }
        [JsonPropertyName("parentId")]
        public int ParentId { get; set; }
        [JsonPropertyName("streamId")]
        public int? StreamId {get; set; }
        [JsonPropertyName("name")]
        public required string Name { get; set; }
        [JsonPropertyName("position")]
        public int? Position { get; set; }
        [JsonPropertyName("metaTitle")]
        public string MetaTitle { get; set; }
        [JsonPropertyName("metaKeywords")]
        public string? MetaKeywords { get; set; }
        [JsonPropertyName("MetaDescription")]
        public string MetaDescription {get; set; }
        [JsonPropertyName("cmsHeadline")]
        public string CmsHeadline { get; set; }
        [JsonPropertyName("cmsText")]
        public string CmsText { get; set; }
        [JsonPropertyName("active")]
        public bool Active {get; set; }
        [JsonPropertyName("template")]
        public string? Template { get; set; }
        [JsonPropertyName("productBoxLayout")]
        public string ProductBoxLayout { get; set; }
        [JsonPropertyName("blog")]
        public bool Blog { get; set;}
        [JsonPropertyName("path")]
        public string Path { get; set; }
        [JsonPropertyName("external")]
        public string External { get; set; }
        [JsonPropertyName("externalTarget")]
        public string ExternalTarget { get; set; }
        [JsonPropertyName("hideFilter")]
        public bool HideFilter { get; set; }
        [JsonPropertyName("hideTop")]
        public bool HideTop { get; set; }
        [JsonPropertyName("changed")]
        [JsonConverter(typeof(DateTimeFormatter))]
        public DateTime Changed { get; set; }
        [JsonPropertyName("added")]
        [JsonConverter(typeof(DateTimeFormatter))]
        public DateTime Added { get; set; }
        [JsonPropertyName("mediaId")]
        public int? MediaId { get; set; }
        [JsonPropertyName("attribute")]
        public object[]? Attribute { get; set; }
        [JsonPropertyName("emotions")]
        public Media[] Emotions { get; set; }
        [JsonPropertyName("media")]
        public Media? Media { get; set; }
        [JsonPropertyName("customerGroups")]
        public object[] CustomerGroups { get; set; }
        [JsonPropertyName("manualSorting")]
        public object[] ManualSorting { get; set; }
        [JsonPropertyName("childrenCount")]
        //[JsonConverter(typeof(Int32Converter))]
        public string ChildrenCount { get; set; }
        [JsonPropertyName("articleCount")]
        //[JsonConverter(typeof(Int32Converter))]
        public string ArticleCount { get; set; }
        [JsonPropertyName("sortingIds")]
        public string SortingIds { get; set; }
        [JsonPropertyName("hideSortings")]
        public bool HideSortings { get; set; }
        [JsonPropertyName("facetIds")]
        public string FacetIds { get; set; }
        [JsonPropertyName("shops")]
        public object Shops { get; set; }
        /* [JsonPropertyName("0")]
        public CategoriesDetail _0 { get; set; } */
    }

    public class CategoriesDetailResponse : Response
    {
        [JsonPropertyName("data")]
        public CategoriesDetail? Data { get; set; }
    }
}