using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace threads_01
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // Instanziierung eines neuen Objektes der Klasse EinDurcheinander
            EinDurcheinander @object = new EinDurcheinander();
            // Zuweisung der Methode AktivierSchleife an 2 Thread Instanzen
            Thread t1 = new Thread(new ParameterizedThreadStart(@object.AktivierSchleife));
            Thread t2 = new Thread(new ParameterizedThreadStart(@object.AktivierSchleife));
            // starte beide Threads nacheinander
            t1.Start(1);
            t2.Start(2);

            Console.ReadKey();
        }
    }
}
