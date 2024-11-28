using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AsyncDemo1
{
    internal class Demo
    {
        private string text;
        public string Text
        { 
            get => text;
            set
            {
                text = value;
                OnPropertyChanged?.Invoke();
            }
        }

        public delegate void EventHandler();
        public event EventHandler OnPropertyChanged;

        public async Task<bool> TuWasAsync1()
        {
            for (int i = 0; i < 20; i++)
            {
                Console.Write("+");
                await Task.Delay(200);
            }
            Text = "beendet";
            return true;
        }
    }
}
