namespace Rechnungsausgabe
{
    static class RechnungsDruck
    {
        public static void druckeSeitenKopf(int seite)
        {
            Console.WriteLine($"Seite {seite}");
        }

        public static void druckeRechnungsKopf(Kunde kunde, string bestellnr)
        {
            Console.WriteLine(kunde.getName());
            Console.WriteLine(kunde.getStrasse());
            Console.WriteLine(kunde.getPLZ() + " " + kunde.getOrt());
            Console.WriteLine($"Kundennummer: {kunde.getKundenNr()}");
            Console.WriteLine($"Ihre Bestellung {kunde.getBestellungen()[0].getRechnung().getRechnungsNr()} vom {kunde.getBestellungen()[0].getRechnung().getRechnungsDatum()}\n");
        }

        public static double druckeRechnungsFuss(double summeBrutto, double rabatt)
        {
            double sum = 0;
            Console.WriteLine($"Summe netto: {(summeBrutto / 119 * 100) / 102 * 100}");
            Console.WriteLine($"Rabatt ({rabatt}%): {(summeBrutto / 119 * 100) / 102 * 2}");
            Console.WriteLine($"Summe netto abzgl. Rabatt: {summeBrutto / 119 * 100}");
            Console.WriteLine($"USt (19 %): {summeBrutto / 119 * 19}");
            Console.WriteLine($"Summe brutto: {summeBrutto}");
            return sum;
        }

        public static void druckePositionenKopf()
        {
            Console.WriteLine("Position   ArtikelNr   Bezeichnung   Einzelpreis (EUR)   Menge   Preis (EUR)");
        }

        public static void druckePositionsZeile(int posNr, string artikelNr, string bezeichnung, double einzelpreis, int menge)
        {
            Console.WriteLine($"{posNr}   {artikelNr}   {bezeichnung}  {einzelpreis}  {menge}   {menge * einzelpreis}");
        }

        public static double rechnungsausgabe(Kunde kunde)
        {
            double sum = 0;
            int seite = 1;
            foreach (Bestellung bestellung in kunde.getBestellungen())
            {
                druckeSeitenKopf(seite);
                if (seite == 1) druckeRechnungsKopf(kunde, bestellung.getBestellNr());
                druckePositionenKopf();
                int positionen = 0;
                foreach (BestellPosition bestellPosition in bestellung.getBestellPositionen())
                {
                    druckePositionsZeile(bestellPosition.getPosNr(), bestellPosition.getArtikel().getArtikelNr(), bestellPosition.getArtikel().getBezeichnung(), bestellPosition.getEinzelPreis(), bestellPosition.getMenge());
                    sum += bestellPosition.getEinzelPreis() * bestellPosition.getMenge();
                    positionen++;
                    if (positionen % 20 == 0)
                    {
                        seite++;
                        Console.WriteLine("\n");
                        druckeSeitenKopf(seite);
                        druckePositionenKopf();
                    }
                }
                druckeRechnungsFuss(sum, kunde.getRabatt());
            }

            return sum;
        }
    }
}