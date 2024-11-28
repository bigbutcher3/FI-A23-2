namespace WpfKontakteSQLite
{
    /// <summary>
    /// Daten-Modell
    /// </summary>
    internal class Contact
    {
        // PK
        public int DbId { get; set; }
        // weitere Felder
        public string? Name { get; set; }
        public string? Telefon { get; set; }

        /// <summary>
        /// Konstruktor (new ...)
        /// Parameter = Felder in DB
        /// </summary>
        /// <param name="Id"></param>
        /// <param name="Nam"></param>
        /// <param name="Tel"></param>
        public Contact(int Id, string Nam, string Tel)
        {
            DbId = Id;
            Name = Nam;
            Telefon = Tel;
        }
    }
}
