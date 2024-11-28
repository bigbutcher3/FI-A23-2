using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace threads_tetraPacks
{
    internal class TetraPack
    {
        // Packungsgröße
        public int MaxInhalt { get; set; }
        // Füllmenge, die bei der Abfüllung erhöht wird
        public int Inhalt { get; set; }

        public TetraPack(int maxInhalt = 0)
        {
            this.MaxInhalt = maxInhalt;
        }
    }
}
