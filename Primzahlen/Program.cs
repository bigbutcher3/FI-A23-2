namespace Primzahlen
{
    class Program
    {
        static void Main(string[] args)
        {
            /* List<int> primes = new List<int>();
            for (int i = 2; i <= 1000; i++)
            {
                for (int j = 2; j <= i; j++)
                {
                    if (i % j != 0) primes.Add(i);
                }
            }
            foreach (int zahl in primes)
            {
                Console.WriteLine(zahl);
            } */
            var nums = new List<bool>(new bool[1000]);
            Sieve(ref nums);
            for (var i = 2; i < nums.Count; i++)
                if (!nums[i]) Console.WriteLine(i);
        }

        static void Sieve(ref List<bool> r_lst)
        {
            for (var i = 2; i < Math.Sqrt(r_lst.Count); i++)
                for (var k = i * i; k < r_lst.Count; k += i)
                    r_lst[k] = true;
        }
    }
}