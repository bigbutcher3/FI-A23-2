using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace threads03_tpl_demo
{
    internal class Program
    {
        static void Main(string[] args)
        {
            /*Parallel.Invoke(Method1, Method2, Method3, Method4);
            Console.WriteLine("!parallel fertig!");*/

            // Standard for-Schleife
            for (int i = 0; i < 10000; i++)
            {
                Console.Write("{0}, ", i);
            }

            // Aufruf und parallele Verarbeitung
            Parallel.For(0, 10000, x => WriteX(x) );

            Console.ReadKey();
        }

        // eine Methode, die parallel ausgeführt werden soll
        public static void Method1()
        {
            for (int i = 0; i < 30; i++)
            {
                Console.Write("#1");
                Thread.Sleep(500);
            }
        }

        // eine weitere Methode, die parallel ausgeführt werden soll
        public static void Method2()
        {
            for (int i = 0; i < 30; i++)
            {
                Console.Write("#2");
                Thread.Sleep(500);
            }
        }

        // eine weitere Methode, die parallel ausgeführt werden soll
        public static void Method3()
        {
            for (int i = 0; i < 30; i++)
            {
                Console.Write("#3");
                Thread.Sleep(500);
            }
        }

        // eine weitere Methode, die parallel ausgeführt werden soll
        public static void Method4()
        {
            for (int i = 0; i < 30; i++)
            {
                Console.Write("#4");
                Thread.Sleep(500);
            }
        }

        // für Parallel.For
        public static void WriteX(int x)
        {
            Console.Write("{0}, ", x);
        }
    }
}
