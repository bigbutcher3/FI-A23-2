using System.ComponentModel.DataAnnotations;

namespace Vererbung
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Lkw lkw1 = new Lkw()
            {
                Hersteller = "MAN",
                Achsen = 3
            };
            Flugzeug flugzeug1 = new Flugzeug()
            {
                Hersteller = "Lufthansa",
                Spannweite = 50
            };
            Schiff schiff1 = new Schiff()
            {
                Hersteller = "Boot-Udo",
                Tiefgang = 15
            };
        }

        public class Fahrzeug
        {
            public string ?Hersteller { get; set; }
        }

        public class Lkw : Fahrzeug
        {
            public int Achsen { get; set; }
        }

        public class Flugzeug : Fahrzeug
        {
            public float Spannweite { get; set; }
        }

        public class Schiff : Fahrzeug
        {
            public float Tiefgang { get; set; }
        }
    }
}