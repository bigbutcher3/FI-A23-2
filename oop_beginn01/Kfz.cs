namespace oop_beginn01
{
    /// <summary>
    /// Kfz-Klasse
    /// </summary>
    public class Kfz
    {
        private string kfzArt;

        public string KfzArt
        { 
            get => kfzArt;
            private set
            {
                if (value.ToLower() != "pkw")
                {
                    Console.WriteLine("Hey, das geht nicht!");
                }
                else
                {
                    kfzArt = value;
                }
            }
        }
        public string Hersteller { get; set; }
        public string Typ { get; set; }
        public string Farbe { get; set; }
        public int Baujahr { get; set; }

        private int reifen;
        public int Reifen
        {
            get { return reifen; }
            set { reifen = value; }
        }
        

        /// <summary>
        /// Konstruktor mit Übergabe von kfzArt
        /// </summary>
        /// <param name="kfzArt">kfzArt</param>
        public Kfz(string kfzArt)
        {
            this.kfzArt = kfzArt;
        }

        public Kfz(){}
    }
}
