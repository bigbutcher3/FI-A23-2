using System.Collections;
using System.Reflection;

namespace Vererbung02
{
    internal class MySort : IComparer
    {
        private Direction direction;
        private string eigenschaft;
        public MySort(Direction direction = Direction.ASC, string eigenschaft = "")
        {
            this.direction = direction;
            this.eigenschaft = eigenschaft;
        }

        public int Compare(object? x, object? y)
        {
            /* if (direction == Direction.ASC)
            {
                if (((Fahrzeug)x).Gewicht > ((Fahrzeug)y).Gewicht)
                {
                    return 1;
                }
                else if (((Fahrzeug)x).Gewicht < ((Fahrzeug)y).Gewicht)
                {
                    return -1;
                }
                else
                {
                    return 0;
                }
            }
            else if (direction == Direction.DESC)
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
            else
            {
                throw new Exception();
            } */

            /* return (((Fahrzeug)x).Gewicht as IComparable).CompareTo(((Fahrzeug)y).Gewicht) * (int)direction; */
            Fahrzeug fahrzeugX = (Fahrzeug)x;
            Fahrzeug fahrzeugY = (Fahrzeug)y;
            PropertyInfo? fahrzeugXProperties = null;
            PropertyInfo? fahrzeugYProperties = null;

            try
            {
                fahrzeugXProperties = fahrzeugX.GetType().GetProperty(eigenschaft) ?? null;
                fahrzeugYProperties = fahrzeugY.GetType().GetProperty(eigenschaft) ?? null;

                return (fahrzeugXProperties != null && fahrzeugYProperties != null)
                        ? (fahrzeugXProperties.GetValue(fahrzeugX) as IComparable).CompareTo(fahrzeugYProperties) * (int)direction
                        : 0;
            } catch (Exception ex)
            {
                if (fahrzeugXProperties == null)
                {
                    throw new Exception($"{ex.Message}\r\nEigenschaft \"{eigenschaft}\" in Objekt {x.GetType().Name} nicht vorhanden.");
                }
                if (fahrzeugYProperties == null)
                {
                    throw new Exception($"{ex.Message}\r\nEigenschaft \"{eigenschaft}\" in Objekt {y.GetType().Name} nicht vorhanden.");
                }
                return 0;
            }

            /* switch (eigenschaft)
            {
                case Eigenschaft.Gewicht:
                    result = ((IComparable)fahrzeugX.Gewicht).CompareTo(fahrzeugY.Gewicht);
                    break;
                case Eigenschaft.Hersteller:
                    result = string.Compare(fahrzeugX.Hersteller, fahrzeugY.Hersteller, StringComparison.OrdinalIgnoreCase);
                    break;
                case Eigenschaft.Baujahr:
                    result = fahrzeugX.Baujahr.CompareTo(fahrzeugY.Baujahr);
                    break;
                default:
                    throw new InvalidOperationException("Unbekannte Eigenschaft");
            } */
        }
    }
}