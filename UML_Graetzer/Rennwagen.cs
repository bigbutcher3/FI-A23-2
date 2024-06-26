namespace UML_Graetzer
{
    class Rennwagen
    {
        private int reifen;
        public int Reifen
        {
            get { return reifen; }
            set { reifen = value; }
        }
        public string ?Name { get; set; }
        public string ?Farbe { get; set; }
        internal protected int x = 0;
        
        public void Run()
        {
            for (int i = 0; i < 10; i++)
            {
                x++;
            }
        }

        public void Sage()
        {
            Console.WriteLine(x);
        }
    }
}