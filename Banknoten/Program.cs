namespace Banknoten
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Title = "Banknote überprüfen";
            Console.Clear();
            Console.Write("Bitte Seriennummer eingeben: ");
            string? SNA = Console.ReadLine();
            char[] SNarr = SNA.ToArray();
            if((SNarr[0] == 'A' || SNarr[0] == 'B' || SNarr[0] == 'C' || SNarr[0] == 'D' || SNarr[0] == 'E' || SNarr[0] == 'F' || SNarr[0] == 'G' || SNarr[0] == 'H' || SNarr[0] == 'I' || SNarr[0] == 'J' || SNarr[0] == 'K' || SNarr[0] == 'L' || SNarr[0] == 'M' || SNarr[0] == 'N' || SNarr[0] == 'O' || SNarr[0] == 'P' || SNarr[0] == 'Q' || SNarr[0] == 'R' || SNarr[0] == 'S' || SNarr[0] == 'T' || SNarr[0] == 'U' || SNarr[0] == 'V' || SNarr[0] == 'W' || SNarr[0] == 'X' || SNarr[0] == 'Y' || SNarr[0] == 'Z') && SNarr.Length == 12)
            {
                string land = SNarr[0].ToString();
                int zahl = System.Convert.ToInt32(land) - 64;
                
            }
        }
    }
}