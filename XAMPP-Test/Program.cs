using MySql.Data.MySqlClient;

public class Program
{
    public static void Main()
    {
        string connStr = "server=localhost;user=root;database=test;port=3306;password=";
        MySqlConnection conn = new MySqlConnection(connStr);
        try
        {
            Console.WriteLine("Connecting to MySQL...");
            conn.Open();

            string sql = "DELETE FROM datentabelle WHERE vorname='test'";
            MySqlCommand cmd = new MySqlCommand(sql, conn);
            cmd.ExecuteNonQuery();

            /* while (rdr.Read())
            {
                Console.WriteLine(rdr["id"]+" -- "+rdr["vorname"]+" -- "+rdr["nachname"]+" -- "+rdr["telefon"]);
            }
            rdr.Close(); */
        }
        catch (Exception ex)
        {
            Console.WriteLine(ex.ToString());
        }

        conn.Close();
        Console.WriteLine("Done.");
    }
}