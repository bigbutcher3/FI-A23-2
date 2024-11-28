using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace threads03_parallel_forEach
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // Liste aus Skript
            /*List<string> liste = new List<string>()
            {
                "eins",
                "zwei",
                "drei",
                "vier"
            };*/

            // ForEach aus Skript (iterierbares Objekt, Delegat-Aufruf o. -Definition
            /*Parallel.ForEach(liste, TuWas); */

            Person mueller = new Person() { Name = "Mueller", Vorname = "Peter" };
            Person mayer = new Person() { Name = "Mayer", Vorname = "Hans" };
            Person schulze = new Person() { Name = "Schulze", Vorname = "Klaus" };

            List<Person> personen = new List<Person>()
            {
                mueller,
                mayer,
                schulze
            };

            string suchStrName = "Schulze";

            ParallelLoopResult result = Parallel.ForEach(personen, personFromLoop => SearchByName(personFromLoop, suchStrName));
            Console.ReadKey();
        }

        // Methode aus Skript
        static void TuWas(string element)
        {
            Console.WriteLine(element);
        }

        static void SearchByName(Person person, string name = "")
        {
            if (person.Name == name)
            {
                Console.WriteLine("Gefunden");
                Console.WriteLine($"Vorname: {person.Vorname}");
                Console.WriteLine($"Name: {person.Name}");
            }
/*#if DEBUG
            else
            {
                Console.WriteLine($"Name {person.Name} nicht gefunden");
            }
#endif*/
        }
    }
}
