namespace Interfaces01
{
    public partial class Program
    {
        public class MysqlStorage : IDatabase
        {
            public Kunden LoadData()
            {
                Console.WriteLine("Load Data from Mysql");
                return new Kunden(new MysqlStorage());
            }

            public void SaveData()
            {
                Console.WriteLine("Save Data to Mysql");
            }
        }
    }
}