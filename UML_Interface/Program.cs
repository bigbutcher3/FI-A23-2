using System;

namespace UML_IT_BERUFE
{
    interface IMaschine
    {
        void Starten();
    }

    class CTraktor : IMaschine
    {
        protected int ps;
        public CTraktor() { ps = 0; }
        public void SetPS(int p) { ps = p; }
        public int GetPS() { return ps; }
        public void Starten()
        {
            Console.WriteLine("Der Traktor laeuft....");
        }
    }

    class CRennwagen : IMaschine
    {
        protected int ps;
        public CRennwagen() { ps = 0; }
        public void SetPS(int p) { ps = p; }
        public int GetPS() { return ps; }
        public void Starten()
        {
            Console.WriteLine("Der Rennwagen laeuft....");
        }
    }

    class CPerson
    {
        protected string name;
        protected IMaschine maschine;
        public CPerson() { name = "NN"; }
        public void SetName(string n) { name = n; }
        public string GetName() { return name; }
        public void Nutze(IMaschine maschine)
        {
            maschine.Starten();
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            CTraktor traktor = new CTraktor();
            CRennwagen rennwagen = new CRennwagen();
            CPerson einePerson = new CPerson();
            einePerson.Nutze(traktor);
            einePerson.Nutze(rennwagen);
        }
    }
}