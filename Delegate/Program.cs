namespace Delegate
{
    public delegate void DelegateHandler(string sender);
    public delegate string DelegateHandler2();

    class Program
    {
        static void Main(string[] args)
        {
            DelegateHandler ausgabe1 = Ausgabe1;
            DelegateHandler ausgabe2 = Ausgabe2;
            DelegateHandler ausgabe3 = delegate (string text) {Console.WriteLine("Was neues {0}", text); };
            DelegateHandler ausgabe4 = (string text) => Console.WriteLine("Was Neues {0}", text);
            DelegateHandler2 ausgabe5 = () => { return "10";};

            ausgabe1("Ausgabe 1");
            ausgabe2("Ausgabe 2");
            ausgabe3("hu");
            ausgabe4("na nu");
            Console.WriteLine(ausgabe5());
        }

        static void Ausgabe1(string sender)
        {
            Console.WriteLine("Die Methode1 \"{0}\" wurde aufgerufen", sender);
        }

        static void Ausgabe2(string text)
        {
            Console.WriteLine("Die Methode2 \"{0}\" wurde aufgerufen", text);
        }
    }
}