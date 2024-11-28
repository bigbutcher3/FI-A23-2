using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace threads_02
{
    internal class Klasse2
    {
        public int Count { get; set; } = 5;

        public void Start(object sperre)
        {
            // kritischer Teil -> Sperre aktivieren
            Monitor.Enter(sperre);
            // wenn der 1. Thread wartet, ihn auf "bereit" stellen
            if (Sperre.Thread1Wartet) Monitor.Pulse(sperre);
            // Thread 2 auf "wartend" setzen
            Sperre.Thread2Wartet = true;
            // solange in der Schleife bleiben, wie dieser Thread aufgerufen wird
            while (Monitor.Wait(sperre))
            {
                // Abarbeitung der Schleife
                for (int i = 1; i <= this.Count; i++)
                {
                    (sperre as Sperre).Thread1 = i;
                    // Ausgabe für den 2. Thread
                    Console.WriteLine("Durchlauf {0} Thread{1}",
                        i, this.GetType().Name);
                    // kurze Pause
                    Thread.Sleep(500);
                }
                // den 1. Thread auf "bereit" setzen
                Monitor.Pulse(sperre);
                // den aktuellen Thread beenden, wenn die Abarbeitung als beendet markiert ist
                if (((Sperre)sperre).Ende) Thread.CurrentThread.Abort();
            }

            // die Sperre aufheben
            Monitor.Exit(sperre);
        }
    }
}
