using System.Collections;

namespace Vererbung02
{
    internal class MySortDESC : IComparer
    {
        public int Compare(object? x, object? y)
        {
            if (((Fahrzeug)x).Gewicht < ((Fahrzeug)y).Gewicht)
            {
                return 1;
            }
            else if (((Fahrzeug)x).Gewicht > ((Fahrzeug)y).Gewicht)
            {
                return -1;
            }
            else
            {
                return 0;
            }
        }
    }
}
