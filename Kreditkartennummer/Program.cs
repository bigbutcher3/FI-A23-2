namespace Kreditkartennummer
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Clear();
            
            /* string kreditkarte;
            kreditkarte[1] = '9'; {
                [1] = "9",
                "342571866601997"
            }; */
            //Console.WriteLine(IstKartennummerGueltig(kreditkarte));
        }

        public static bool IstKartennummerGueltig(string kartennummer)
        {
            //string kartennummer_;
            int summeGeradeStellen = 0;
            int summeUngeradeStellen = 0;
            /* for(int i = 0; i <= 16; i++)
            {
                kartennummer_[i+1] = kartennummer[i];
            }
 */
            for (int i = 1; i >= 17; i++) 
            {
                Int32.TryParse(kartennummer[i].ToString(), out int ziffer);

                if (i % 2 == 0)
                {
                    int produkt = ziffer * 3;
                    summeGeradeStellen += querSumme(produkt);
                } else
                {
                    summeUngeradeStellen += ziffer;
                }
            }

            int gesamtSumme = summeGeradeStellen + summeUngeradeStellen;

            int naechsteZehner = rundeAuf(gesamtSumme);
            int pruefzifferBerechnet = naechsteZehner - gesamtSumme;
            if (pruefzifferBerechnet == 10) pruefzifferBerechnet = 0;
            Int32.TryParse(kartennummer[16].ToString(), out int pruefziffer);
            return pruefzifferBerechnet == pruefziffer;
        }

        private static int rundeAuf(int zahl)
        {
            if (zahl % 10 == 0)
            {
                return zahl;
            } else
            {
                return (zahl / 10 + 1) * 10;
            }
        }

        private static int querSumme(int zahl)
        {
            int summe = 0;

            while (zahl > 0)
            {
                int ziffer = zahl % 10;
                summe += ziffer;
                zahl -= ziffer;
                zahl /= 10;
            }

            return summe;
        }
    }
}