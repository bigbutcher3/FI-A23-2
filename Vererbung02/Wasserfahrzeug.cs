namespace Vererbung01
{
    public abstract class Wasserfahrzeug : Fahrzeug
    {
        public decimal Brt { get; set; }

        public override string Ausgabe()
        {
            Console.WriteLine("Ausgabe Wasserfahrzeug");
            return "";
        }

        public virtual void Ablegen()
        {
            Console.WriteLine("Das Wasserfahrzeug legt ab");
        }

        public virtual void Anlegen()
        {
            Console.WriteLine("Das Wasserfahrzeug legt an");
        }
    }
}