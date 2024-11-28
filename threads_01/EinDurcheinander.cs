using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace threads_01
{
    internal class EinDurcheinander
    {
        /// <summary>
        /// Zählvariable, die in der Methode AktivierSchleife
        /// inkrementiert wird
        /// </summary>
        public int zahl;

        /// <summary>
        /// Die Methode durchläuft eine Schleife solange, bis die
        /// Zählvariable den Wert 200 erreicht hat. Der Parameter
        /// threadId wird vom aktuellen Thread übergeben und
        /// soll in der Ausgabe die Wirkungsweise verdeutlichen.
        /// </summary>
        /// <param name="threadId"></param>
        public void AktivierSchleife(object threadId)
        {
            Console.WriteLine("Thread gestartet {0}", (int)threadId);
            bool locked = false;
            while (true)
            {
                try
                {
                    // Sperre aktivieren, wenn locked == false
                    if (!locked)
                    {
                        Monitor.Enter(this, ref locked);    // ref ist wichtig
                        zahl++;
                        if (zahl > 200) break;
                        Console.Write("{0}={1}\n", zahl, (int)threadId);
                    }
                }
                finally
                {
                    // Sperre deaktivieren, wenn locked == true
                    if (locked)
                    {
                        Monitor.Exit(this);
                        locked = false;
                    }
                }
            }
            Console.WriteLine("Thread beendet {0}", (int)threadId);
        }
    }
}
