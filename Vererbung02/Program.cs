namespace Vererbung01
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Clear();
            Console.BackgroundColor = ConsoleColor.Black;
            Console.ForegroundColor = ConsoleColor.White;
            Console.Title = "Vererbung";

            Flugzeug flugzeug = new Flugzeug("Lufthansa", 1990, 20000f, 18.7f);
            Hubschrauber hubschrauber = new Hubschrauber("Hub und Schraub", 2010, 8000f, 10.2f);
            UBoot uBoot = new UBoot("Unter Gang", 1812, 60.4m);

            Fahrzeug[] fahrzeuge = new Fahrzeug[]
            {
                flugzeug,
                hubschrauber,
                uBoot
            };

            Ausgabe(fahrzeuge);
        }
        static void Ausgabe(object fahrzeug)
        {
            ((Luftfahrzeug)fahrzeug).Abheben();
        }
        static void Ausgabe(Luftfahrzeug fahrzeug)
        {
            fahrzeug.Abheben();
        }
        static void Ausgabe(List<Luftfahrzeug> fahrzeugs)
        {
            foreach (Luftfahrzeug luftfahrzeug in fahrzeugs)
            {
                luftfahrzeug.Abheben();
            }
        }

        static void Ausgabe(Fahrzeug[] fahrzeuge)
        {
            foreach (Fahrzeug fahrzeug in fahrzeuge)
            {
                fahrzeug.Ausgabe();
                if (fahrzeug is Luftfahrzeug)
                {
                    if (fahrzeug is Flugzeug)
                    {
                        ((Flugzeug)fahrzeug).Abheben();
                    } else if (fahrzeug is Hubschrauber)
                    {
                        ((Hubschrauber)fahrzeug).Abheben();
                    }
                } else if (fahrzeug is Wasserfahrzeug)
                {
                    if (fahrzeug is UBoot)
                    {
                        ((UBoot)fahrzeug).Ablegen();
                    }
                }
            }
        }
    }
}