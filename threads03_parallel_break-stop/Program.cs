using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace threads03_parallel_break_stop
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // Starten der parallelen Verarbeitung
            ParallelLoopResult result = Parallel.For(
                0,                      // Beginn der Iteration
                100,                    // Ende der Iteration
                (x, state) => {         // Lambda-Ausdruck, in dem der Delegat aufgerufen wird
                    TueWas(x, state);
                });

            // Auswertung der Schleifenausführung
            if (result.IsCompleted)
            {
                // wenn FOR weder durch BREAK, noch durch STOP beendet wurde
                Console.WriteLine("For ordnungsgemäß beendet");
            }
            else if (result.LowestBreakIteration != null)
            {
                // wenn FOR mit BREAK beendet wurde
                Console.WriteLine("For am Index \"{0}\" vorzeitig mit \"Break\" beendet",
                    result.LowestBreakIteration);
            }
            else
            {
                // wenn FOR mit STOP beendet wurde
                Console.WriteLine("For vorzeitig mit \"Stop\" beendet");
            }

            Console.ReadKey();
        }

        //Delegat für die parallele Verarbeitung
        static void TueWas(int x, ParallelLoopState state)
        {
            if (x <= 20) Console.WriteLine(x);

            // beendet die Schleife nach diesem Durchlauf
            // am Aufrufer kann der Index des letzten Durchlaufes
            // abgerufen werden
            if (x > 20) state.Break();

            // beendet die Schleife vorzeitig
            // am Aufrufer gibt es keine Rückgabe der letzten Iteration
            //if (x > 20) state.Stop();
        }
    }
}
