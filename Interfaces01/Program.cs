namespace Interfaces01
{
    public partial class Program
    {
        static void Main(string[] args)
        {
            Kunden kundenFile = new Kunden(new FileStorage());
            Kunden kundenMysql = new Kunden(new MysqlStorage());
            kundenFile.AusgabeKunden();
            kundenMysql.AusgabeKunden();
        }
    }
}