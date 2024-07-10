namespace Interfaces01
{
    public class Kunden
    {
        public List<Kunde> ?KundeList { get; set; }
        private IDatabase database;

        public List<Kunde> AusgabeKunden()
        {
            var kunden = database.LoadData().KundeList;
            foreach (var kunde in kunden)
            {
                Console.WriteLine(kunde);
            }
            return kunden;
        }

        public Kunden(IDatabase database) => this.database = database;
    }
}