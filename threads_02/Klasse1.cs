using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace threads_02
{
    internal class Klasse1
    {
        public int Count { get; set; } = 3;

        public void Start(object sperre)
        {
            // kritischer Teil -> Sperre aktivieren
            Monitor.Enter(sperre);
            for (int i = 1; i <= this.Count; i++)
            {
                // den 1. Thread
                Sperre.Thread1Wartet = true;
                // wenn der 2. Thread nicht wartet, für den 1. Thread "wartend" aktivieren
                // und die Sperre für das Objekt aufheben
                if (Sperre.Thread2Wartet == false) Monitor.Wait(sperre);
                (sperre as Sperre).Thread1 = i;
                // Ausgabe des 1. Threads
                Console.WriteLine(new String('-', 30));
                Console.WriteLine("Durchlauf {0} Thread {1}",
                    i, this.GetType().Name);
                Console.WriteLine(new String('=', 30));
                // kurze Pause
                Thread.Sleep(2000);
                // den 2. Thread "bereit" setzen
                Monitor.Pulse(sperre);
                // Thread 2 auf "bereit" setzen
                Sperre.Thread2Wartet = false;
            }
            // Alle Durchläufe sind erledigt, die Abarbeitung wird auf WAHR gesetzt
            (sperre as Sperre).Ende = true;
            // Sperre aufheben
            Monitor.Exit(sperre);
        }
    }
}
