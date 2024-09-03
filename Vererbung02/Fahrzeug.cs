namespace Vererbung02
{
    public abstract class Fahrzeug
    {
        public string? Hersteller { get; set; }
        public int Baujahr { get; set; }
        public float Gewicht { get; set; }
        public abstract string Ausgabe();
        public sealed override string ToString()
        {
            return Ausgabe();
        }
    }
}