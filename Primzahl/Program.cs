namespace Primzahl
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Title = "Primzahl überprüfen";
            Console.BackgroundColor = ConsoleColor.Black;
            Console.ForegroundColor = ConsoleColor.White;
            Console.Clear();

            Console.Write("Bitte zu überprüfende Zahl eingeben: ");
            Int32.TryParse(Console.ReadLine(), out int x);
            bool isPrim = true;

            for (int i = 2; i < x; i++)
            {
                if (x % i == 0)
                {
                    isPrim = false;
                    break;
                }
            }

            Console.Write($"Die Zahl {x} ist ");
            if (isPrim)
            {
                Console.WriteLine("eine Primzahl.");
            } else
            {
                Console.WriteLine("keine Primzahl.");
            }
        }
    }
}