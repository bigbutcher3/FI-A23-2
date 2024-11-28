using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace threads_02
{
    internal class Sperre
    {
        public bool Ende {  get; set; } = false;
        public int Thread1 { get; set; } = 0;
        public int Thread2 { get; set; } = 0;
        public static bool Thread1Wartet { get; set; } = false;
        public static bool Thread2Wartet { get; set; } = false;
    }
}
