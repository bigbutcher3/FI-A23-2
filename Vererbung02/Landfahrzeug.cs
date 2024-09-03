namespace Vererbung02
{
    public abstract class Landfahrzeug : Fahrzeug
    {
        public int Achsen { get; set; }

        public override string Ausgabe()
        {
            Console.WriteLine("Ausgabe Landfahrzeug");
            return "";
        }
    }
}