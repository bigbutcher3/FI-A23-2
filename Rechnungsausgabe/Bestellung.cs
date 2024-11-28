namespace Rechnungsausgabe
{
    class Bestellung
    {
        private readonly string bestellNr;
        private readonly string bestellDatum;
        private readonly Rechnung rechnung;
        private readonly BestellPosition[] bestellPositionen;

        /* public Bestellung()
        {
            new Bestellung();
        } */

        public Bestellung(string bestellNr, string bestellDatum, Rechnung rechnung, BestellPosition[] bestellPositionen)
        {
            this.bestellNr = bestellNr;
            this.bestellDatum = bestellDatum;
            this.rechnung = rechnung;
            this.bestellPositionen = bestellPositionen;
        }

        public string getBestellNr()
        {
            return bestellNr;
        }

        public string getBestellDatum()
        {
            return bestellDatum;
        }

        public Rechnung getRechnung()
        {
            return rechnung;
        }

        public BestellPosition[] getBestellPositionen()
        {
            return bestellPositionen;
        }
    }
}