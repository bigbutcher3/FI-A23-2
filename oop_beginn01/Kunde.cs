namespace oop_beginn01
{
    class Kunde
    {
        private int kundennr;
        public int Kundennr { get; private set; }
        public string addresse { get; set; }
        public string name { get; set; }
        public string telefon { get; set; }

        public Kunde(int kundennr)
        {
            this.kundennr = kundennr;
        }
    }
}