using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BeladungLkw
{
    static class Beladung
    {
        public static void erstelleLadungsliste(int[][] ladungsliste, double nutzlast_kg, int maxAnzahlPaletten)
        {
            double aktuellesGewicht = 0;
            int aktuellePaletten = 0;
            int aktuellerLkw = 1;
            bool beladen = false;
            nutzlast_kg *= 1000;

            while (beladen == false && aktuellerLkw <= 10)
            {
                beladen = true;
                aktuellesGewicht = 0;
                aktuellePaletten = 0;
                for (int i = 0; i < ladungsliste.Length; i++)
                {
                    if (aktuellesGewicht + ladungsliste[i][0] <= nutzlast_kg && aktuellePaletten < maxAnzahlPaletten && ladungsliste[i][1] == 0)
                    {
                        aktuellesGewicht += ladungsliste[i][0];
                        aktuellePaletten++;
                        ladungsliste[i][1] = aktuellerLkw;
                        beladen = false;
                    }
                }
                aktuellerLkw++;
                
                /*if (aktuellesGewicht + ladungsliste[i][0] <= nutzlast_kg && aktuellePaletten < maxAnzahlPaletten)
                {
                    ladungsliste[i][1] = aktuellerLkw;
                    aktuellesGewicht += ladungsliste[i][0];
                    aktuellePaletten++;
                }
                else
                {
                    aktuellerLkw++;
                    aktuellesGewicht = 0;
                    aktuellePaletten = 0;
                }
                if (aktuellerLkw > 10) break;*/
            }
        }
    }
}
