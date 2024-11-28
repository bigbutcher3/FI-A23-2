class Program
{
    StreamReader reader = new StreamReader("Protokolldatei.txt");
    static void Main(string[] args)
    {
        string[] maImBereich = EmittleMitarbeiterInBereich(21);
        foreach (string line in maImBereich)
        {
            Console.WriteLine(line);
        }
    }

    public static string[] EmittleMitarbeiterInBereich(int bereichId)
    {
        StreamReader reader = new StreamReader("Protokolldatei.txt");
        string[] mitarbeiter = {};
        string bId = "B" + bereichId.ToString();
        string[] line = leseProtokollsatz();

        while (line != null)
        {
            if (line[2] == bId && line[4] == "true")
            {
                if (line[5] == "Z")
                {
                    SchreibeInArray(ref mitarbeiter, line[3]);
                } else
                {
                    LoescheAusArray(ref mitarbeiter, line[3]);
                }
            }
            line = leseProtokollsatz();
        }
        return mitarbeiter;
    }

    private static void LoescheAusArray(ref string[] array, string element)
    {
        string[] newArray = new string[array.Length-1];
        int i = 0;
        foreach (string elem in array)
        {
            if (elem != element)
            {
                newArray[i] = elem;
                i++;
            }
        }
        array = newArray;
    }

    private static void SchreibeInArray(ref string[] array, string element)
    {
        Array.Resize(ref array, array.Length+1);
        array[array.Length-1] = element;
    }

    public static string[] leseProtokollsatz()
    {
        string line = reader.ReadLine();
        string[] ma = line.Split(";");
        return ma;
    }
}