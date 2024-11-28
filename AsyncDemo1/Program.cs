using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AsyncDemo1
{
    internal class Program
    {
        static /*async Task*/ void Main(string[] args)
        {
            try
            {
                /*Task<bool> demo1 = TuWasAsync1();
                Task<bool> demo2 = TuWasAsync2();

                Task.WaitAll(demo1, demo2);
                Console.WriteLine("\nDas Ergebnis lautet {0}", await demo2 ? "true" : "false");*/

                Demo demo = new Demo();
                demo.OnPropertyChanged += Demo_OnPropertyChanged;
                demo.TuWasAsync1();
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.ToString());
            }

            Console.WriteLine("Programm läuft...");
            Console.ReadKey();
        }

        public static void Demo_OnPropertyChanged()
        {
            Console.WriteLine("\nfertig");
        }

        /*static async Task<bool> TuWasAsync1()
        {
            for (int i = 0; i < 20; i++)
            {
                Console.Write("+");
                await Task.Delay(200);
            }
            return true;
        }
        
        static async Task<bool> TuWasAsync2()
        {
            for (int i = 0; i < 20; i++)
            {
                if (i > 10) throw new InvalidProgramException("i größer 10");
                Console.Write("-");
                await Task.Delay(200);
            }
            return true;
        }*/
    }
}
