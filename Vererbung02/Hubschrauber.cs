namespace Vererbung01
{
    public class Hubschrauber : Luftfahrzeug
    {
        public float Rotodurchmesser { get; set; }

        public new void Abheben()
        {
            Console.WriteLine("Der Hubschrauber hebt ab");
        }
        public override void Landen()
        {
            Console.WriteLine("Der Hubschrauber landet");
        }

        public override string Ausgabe()
        {
            Console.WriteLine("Ausgabe Hubschrauber");
            Console.WriteLine($"Hersteller: {Hersteller}");
            Console.WriteLine($"Baujahr: {Baujahr}");
            Console.WriteLine($"Max. Flughöhe: {MaxFlughoehe}");
            Console.WriteLine($"Rotodurchmesser: {Rotodurchmesser}");
            return "";
        }

        public Hubschrauber() { }

        public Hubschrauber(string hersteller, int baujahr, float maxFlughoehe, float rotodurchmesser)
        {
            Hersteller = hersteller;
            Baujahr = baujahr;
            MaxFlughoehe = maxFlughoehe;
            Rotodurchmesser = rotodurchmesser;
        }
    }
}