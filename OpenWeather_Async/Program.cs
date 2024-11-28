using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OpenWeather_Async
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Title = "Wetterabfrage OpenWeather";

            const string KEY = "bf402e7322e512f1d49dfda587623051";
            string URL = $"https://api.openweathermap.org/data/2.5/weather?appid={KEY}&lang=de&units=metric&q=";

            Console.Write("Bitte Stadt eingeben: ");
            string city = Console.ReadLine();

            URL += city.Trim();
            Console.ReadKey();
        }
    }
}
