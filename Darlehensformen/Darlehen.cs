namespace Darlehensformen
{
    class Darlehen
    {
        public double Kreditsumme { get; set; }
        public double Laufzeit { get; set; }
        public double Zinssatz { get; set; }
        public Darlehensart Darlehensart { get; set; }
        public Darlehen(double kreditsumme, double laufzeit, double zinssatz, Darlehensart darlehensart)
        {
            Kreditsumme = kreditsumme;
            Laufzeit = laufzeit;
            Zinssatz = zinssatz;
            Darlehensart = darlehensart;
        }

        
    }
}