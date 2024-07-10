namespace Vererbung01
{
    public class UBoot : Wasserfahrzeug
    {
        public override void Ablegen()
        {
            Console.WriteLine("Das U-Boot legt ab");
        }

        public override void Anlegen()
        {
            Console.WriteLine("Das U-Boot legt an");
        }

        public override string Ausgabe()
        {
            Console.WriteLine("Ausgabe U-Boot");
            Console.WriteLine($"Hersteller: {Hersteller}");
            Console.WriteLine($"Baujahr: {Baujahr}");
            Console.WriteLine($"Bruttoregistertonnen: {Brt}");
            return "";
        }

        public UBoot() { }

        public UBoot(string hersteller, int baujahr, decimal brt)
        {
            Hersteller = hersteller;
            Baujahr = baujahr;
            Brt = brt;
        }
    }
}