namespace Navigierbarkeit
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Vater vater = new Vater();
            Kind kind1 = new Kind();

            vater.AddKind(kind1);

            Console.WriteLine($"Mein Vater ist {kind1.MeinVater}");
        }
    }

    public class Vater
    {
        public List<Kind> Kinder { get; set; } = new List<Kind>();

        public void AddKind(Kind kind)
        {
            if (!Kinder.Contains(kind))
            {
                Kinder.Add(kind);
                kind.SetVater(this);
            }
        }
    }

    public class Kind
    {
        public Vater MeinVater { get; set; }

        public void SetVater(Vater vater)
        {
            MeinVater = vater;
            vater.AddKind(this);
        }
    }
}