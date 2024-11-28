namespace WpfApp_DataGrid_List
{
    internal class Contact
    {
        public int DbId { get; set; }
        public string? Name { get; set; }
        public string? Telefon { get; set; }
        public Contact(int DbId, string? Name, string? Telefon)
        {
            this.DbId = DbId;
            this.Telefon = Telefon;
            this.Name = Name;
        }
    }

}
