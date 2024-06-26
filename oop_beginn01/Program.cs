
namespace oop_beginn01
{
    class Program
    {
        /// <summary>
        /// Main-Methode
        /// </summary>
        /// <param name="args"></param>
        static void Main(string[] args)
        {
            #region Init Demo Daten
            Kfz VwPolo = new Kfz("PKW")
            {
                Hersteller = "Volkswagen",
                Typ = "Polo",
                Farbe = "blau",
                Baujahr = 2012
            };
            TuWas(VwPolo);
            Kfz audi = new Kfz();   //leeres Objekt
            #endregion
            Console.WriteLine($"Der Hersteller heißt {VwPolo.Hersteller}, das Baujahr des Autos lautet {VwPolo.Baujahr} und die Art ist {VwPolo.KfzArt}.");
            Console.WriteLine($"Der Hersteller heißt {audi.Hersteller}, das Baujahr des Autos lautet {audi.Baujahr} und die Art ist {audi.KfzArt}.");
        }

        /// <summary>
        /// Methode "TuWas"
        /// </summary>
        /// <param name="kfz">Objekt des Typen Kfz</param>
        /// <returns>0</returns>
        private static int TuWas(Kfz kfz)
        {
            kfz.Hersteller = "LKW";
            return 0;
        }
    }
}