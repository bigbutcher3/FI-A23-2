namespace Aggregation
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Kfz vwPolo = new Kfz();
            vwPolo.SetMotor();
            vwPolo.SetFrontscheibe();

            vwPolo = null;
        }
    }

    public class Kfz
    {
        public Motor Motor { get; set; }
        public Frontscheibe Frontscheibe { get; set; }

        public void SetMotor()
        {
            Motor = new Motor();
        }

        public void SetFrontscheibe()
        {
            Frontscheibe = new Frontscheibe();
        }
    }

    public class Motor
    {

    }

    public class Frontscheibe
    {

    }
}