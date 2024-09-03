namespace Vererbung02
{
    public abstract class Luftfahrzeug : Fahrzeug
    {
        public float MaxFlughoehe { get; set; }

        public void Abheben()
        {
            Console.WriteLine("Das Luftfahrzeug hebt ab");
        }

        public override string Ausgabe()
        {
            Console.WriteLine("Ausgabe Luftfahrzeug");
            return "";
        }

        public virtual void Landen()
        {
            Console.WriteLine("Das Luftfahrzeug landet");
        }
    }
}