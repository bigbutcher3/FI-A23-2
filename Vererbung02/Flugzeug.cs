namespace Vererbung02
{
    public class Flugzeug : Luftfahrzeug
    {
        public float Spannweite { get; set; }

        public new void Abheben()
        {
            Console.WriteLine("Das Flugzeug hebt ab");
        }
        public override void Landen()
        {
            Console.WriteLine("Das Flugzeug landet");
        }

        public override string Ausgabe()
        {
            Console.WriteLine("Ausgabe Flugzeug");
            Console.WriteLine($"Hersteller: {Hersteller}");
            Console.WriteLine($"Baujahr: {Baujahr}");
            Console.WriteLine($"Max. Flughöhe: {MaxFlughoehe}");
            Console.WriteLine($"Spannweite: {Spannweite}");
            return "";
        }

        public Flugzeug() { }

        public Flugzeug(string hersteller, int baujahr, float maxFlughoehe, float spannweite)
        {
            Hersteller = hersteller;
            Baujahr = baujahr;
            MaxFlughoehe = maxFlughoehe;
            Spannweite = spannweite;
        }
    }
}