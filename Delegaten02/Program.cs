namespace Delegaten02
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Clear();
            Konto k = new Konto().WithSaldo(0);
            k.SaldoAenderung += K_SaldoAenderung;
            k.SaldoPlus += K_SaldoPlus;
            k.SaldoMinus += K_SaldoMinus;
            k.Einzahlung(100);
            k.Auszahlung(100);
        }

        private static void K_SaldoAenderung(Konto sender, KontoAenderungEventArgs args)
        {
            Console.WriteLine($"Kontostand wurde geändert und beträgt jetzt {sender.Saldo}\n");
        }

        private static void K_SaldoPlus(Konto sender, KontoPlusEventArgs args)
        {
            Console.WriteLine($"Saldo vor Einzahlung: {sender.Saldo}");
            Console.WriteLine($"{args.Betrag} Euro eingezahlt");
        }

        private static void K_SaldoMinus(Konto sender, KontoMinusEventArgs args)
        {
            Console.WriteLine($"Saldo vor Auszahlung: {sender.Saldo}");
            Console.WriteLine($"{args.Betrag} Euro ausgezahlt");
        }
    }
}