namespace DisposableBsp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello, World!");
            using (Demo demo = new Demo())
            {
                Console.WriteLine("hu hu");
            }
        }
    }
}