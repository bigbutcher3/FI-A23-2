namespace Rechnungsausgabe
{
    class Artikel
    {
        private readonly string artikelNr;
        private readonly string bezeichnung;

        public Artikel(string artikelNr, string bezeichnung)
        {
            this.artikelNr = artikelNr;
            this.bezeichnung = bezeichnung;
        }

        public string getArtikelNr()
        {
            return artikelNr;
        }

        public string getBezeichnung()
        {
            return bezeichnung;
        }
    }
}