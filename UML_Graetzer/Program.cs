namespace UML_Graetzer
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Clear();
            Rennwagen r = new Rennwagen();
            r.Run();
            r.Sage();
            Console.WriteLine("Beliebige Taste zum Beenden ...");
            Console.ReadKey();
        }
    }
}