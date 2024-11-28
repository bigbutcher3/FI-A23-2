namespace DisposableBsp
{
    public class Demo : IDisposable
    {
        public void Dispose()
        {
            Console.WriteLine("und wech hier");
        }
    }
}