namespace Rechnungsausgabe
{
    class Rechnung
    {
        private readonly string rechungsNr;
        private readonly string rechnungsDatum;

        public Rechnung(string rechungsNr, string rechnungsDatum)
        {
            this.rechungsNr = rechungsNr;
            this.rechnungsDatum = rechnungsDatum;
        }

        public string getRechnungsNr()
        {
            return rechungsNr;
        }

        public string getRechnungsDatum()
        {
            return rechnungsDatum;
        }
    }
}