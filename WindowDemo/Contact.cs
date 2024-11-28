namespace WindowDemo
{
    public class Contact
    {
        public int id { get; }
        string name;
        string tel;
        public Contact(int id, string name, string tel)
        {
            this.id = id;
            this.name = name;
            this.tel = tel;
        }
    }
}