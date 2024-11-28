namespace Rechnungsausgabe
{
    class BestellPosition
    {
        private readonly string bestellNr;
        private readonly int posNr;
        private readonly Artikel artikel;
        private readonly double einzelPreis;
        private readonly int menge;

        public BestellPosition(string bestellNr, int posNr, Artikel artikel, double einzelPreis, int menge)
        {
            this.bestellNr = bestellNr;
            this.posNr = posNr;
            this.artikel = artikel;
            this.einzelPreis = einzelPreis;
            this.menge = menge;
        }

        public string getBestellNr()
        {
            return bestellNr;
        }

        public int getPosNr()
        {
            return posNr;
        }

        public Artikel getArtikel()
        {
            return artikel;
        }

        public double getEinzelPreis()
        {
            return einzelPreis;
        }

        public int getMenge()
        {
            return menge;
        }
    }
}