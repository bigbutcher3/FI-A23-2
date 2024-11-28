namespace Rechnungsausgabe
{
    class Kunde
    {
        private readonly string kundenNr;
        private readonly string name;
        private readonly string strasse;
        private readonly string plz;
        private readonly string ort;
        private readonly Bestellung[] bestellungen;
        private readonly double rabatt;

        public Kunde(string kundenNr, string name, string strasse, string plz, string ort, Bestellung[] bestellungen, double rabatt)
        {
            this.kundenNr = kundenNr;
            this.name = name;
            this.strasse = strasse;
            this.plz = plz;
            this.ort = ort;
            this.bestellungen = bestellungen;
            this.rabatt = rabatt;
        }

        /* public Kunde()
        {
            new Kunde();
        } */

        public string getKundenNr()
        {
            return kundenNr;
        }

        public string getName()
        {
            return name;
        }

        public string getStrasse()
        {
            return strasse;
        }

        public string getPLZ()
        {
            return plz;
        }

        public string getOrt()
        {
            return ort;
        }

        public Bestellung[] getBestellungen()
        {
            return bestellungen;
        }

        public double getRabatt()
        {
            return rabatt;
        }
    }
}
