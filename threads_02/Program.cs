using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace threads_02
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Sperre sperre = new Sperre();

            Klasse1 k1 = new Klasse1();
            Klasse2 k2 = new Klasse2();

            Thread t1 = new Thread(new ParameterizedThreadStart(k1.Start));
            Thread t2 = new Thread(new ParameterizedThreadStart(k2.Start));

            t1.Start(sperre);
            t2.Start(sperre);

            Console.ReadKey();
        }
    }
}
