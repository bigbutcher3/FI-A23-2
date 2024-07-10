namespace Interfaces01
{
    public class FileStorage : IDatabase
    {
        public Kunden LoadData()
        {
            Console.WriteLine("Load Data from File");
            return new Kunden(new FileStorage());
        }

        public void SaveData()
        {
            Console.WriteLine("Save Data to File");
        }
    }
}