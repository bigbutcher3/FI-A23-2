namespace Rechnungsausgabe
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Clear();
            Rechnung rechnung = new Rechnung("001", "02.01.2001");
            Artikel artikel1 = new Artikel("A01", "Testartikel");
            BestellPosition position1 = new BestellPosition("0001", 1, artikel1, 10.99, 3);
            BestellPosition[] bestellPositionen = {
                position1
            };
            Bestellung bestellung1 = new Bestellung("0001", "01.01.2001", rechnung, bestellPositionen);
            Bestellung[] bestellungen = {
                bestellung1
            };
            Kunde hans = new Kunde("1", "Hans Schmidt", "Strasse 1", "01234", "Stadt", bestellungen, 2);

            RechnungsDruck.rechnungsausgabe(hans);
        }
    }
}