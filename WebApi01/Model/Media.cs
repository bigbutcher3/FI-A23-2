using System.Text.Json.Serialization;

namespace WebApi01.Model
{
    public class Media
    {
        /*
        id 	integer (primary key) 	
        company 	string 	
        department 	string 	
        salutation 	string 	
        title 	string 	
        firstname 	string 	
        lastname 	string 	
        street 	string 	
        zipcode 	string 	
        city 	string 	
        phone 	string 	
        vatId 	string 	
        additionalAddressLine1 	string 	
        additionalAddressLine2 	string 	
        country 	int (foreign key) 	Country
        state 	int (foreign key) 	State
        attribute 	array
        */
    }

    public class MediaResponse : Response
    {
        [JsonPropertyName("data")]
        public List<Media>? Data { get; set; }
    }
}