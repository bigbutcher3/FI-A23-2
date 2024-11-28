using Lombok.NET;

namespace Delegaten02
{
    [With]
    public partial class Konto
    {
        public delegate void SaldoAenderungEventHandler(Konto sender, KontoAenderungEventArgs args);
        public delegate void SaldoEinzahlungEventHandler(Konto sender, KontoPlusEventArgs args);
        public delegate void SaldoAuszahlungEventHandler(Konto sender, KontoMinusEventArgs args);
        private double saldo = 0;
        public double Saldo
        {
            get
            {
                return saldo;
            }
            set
            {
                saldo = value;
                SaldoAenderung?.Invoke(this, new KontoAenderungEventArgs(saldo));
            }
        }

        public event SaldoAenderungEventHandler? SaldoAenderung;
        public event SaldoEinzahlungEventHandler? SaldoPlus;
        public event SaldoAuszahlungEventHandler? SaldoMinus;

        public void Einzahlung(double betrag)
        {
            SaldoPlus?.Invoke(this, new KontoPlusEventArgs(betrag));
            Saldo += betrag;
        }

        public void Auszahlung(double betrag)
        {
            SaldoMinus?.Invoke(this, new KontoMinusEventArgs(betrag));
            Saldo -= betrag;
        }
    }

    public class KontoMinusEventArgs : EventArgs
    {
        public double Betrag { get; private set; }
        public KontoMinusEventArgs(double betrag)
        {
            Betrag = betrag;
        }
    }

    public class KontoPlusEventArgs : EventArgs
    {
        public double Betrag { get; private set; }
        public KontoPlusEventArgs(double betrag)
        {
            Betrag = betrag;
        }
    }

    public class KontoAenderungEventArgs : EventArgs
    {
        public double Betrag { get; private set; }
        public KontoAenderungEventArgs(double betrag)
        {
            Betrag = betrag;
        }
    }
}