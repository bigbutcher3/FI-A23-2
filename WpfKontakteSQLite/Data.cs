using System;
using System.Collections.ObjectModel;
using System.Diagnostics;
using System.Data.SQLite;


namespace WpfKontakteSQLite
{
    /// <summary>
    /// Alle Operationen, die mit DB zu tun haben
    /// </summary>
    internal class Data
    {
        // Vorher List<>, allerdings schlecht für dynamisches DataBinding
        public ObservableCollection<Contact> list1 = new ObservableCollection<Contact>();

        /// <summary>
        /// Informationen für DB-Verbindung
        /// </summary>
        string connString = "Data Source=database.db; Version = 3; New = True; Compress = True;";

        /// <summary>
        /// Konstruktor
        /// </summary>
        public Data()
        {
            //// Einige Testdaten in die Kontakte-Liste eintragen
            //list1.Add(new Contact(0, "Marion", "0175-7834834"));
            //list1.Add(new Contact(1, "Max", "0172-4235778"));
            //list1.Add(new Contact(2, "Michael", "0172-4235778"));

            // DB-Tabelle 'kontakte' beim allerersten Start der Applikation herstellen
            OnFirstLaunchCreateTable();
        }

        /// <summary>
        /// Verbindung aufbauen
        /// </summary>
        /// <returns>Aufgebaute Verbindung</returns>
        SQLiteConnection CreateConnection()
        {
            SQLiteConnection sqlite_conn;
            // Create a new database connection:
            sqlite_conn = new SQLiteConnection(connString);
            // Open the connection:
            try
            {
                sqlite_conn.Open();
            }
            catch (Exception ex)
            {
                // falls Fehler
            }

            // Rückgabe der aufgebauten Verbindung
            return sqlite_conn;
        }

        /// <summary>
        /// Erzeugt Tabelle "kontakte", falls sie noch nicht existiert
        /// </summary>
        public void OnFirstLaunchCreateTable()
        {
            SQLiteConnection conn = CreateConnection();
            SQLiteCommand sqlite_cmd;
            sqlite_cmd = conn.CreateCommand();

            // Fpr den test der Tabellenherstellung: Lösche eine vorhandene Tabelle
            //string DropTestSql = "DROP TABLE IF EXISTS kontakte;";
            //sqlite_cmd.CommandText = DropTestSql;
            //sqlite_cmd.ExecuteNonQuery();

            // Herstellung der Tabelle beim allersten Start der Applikation 
            string CreateSql = "CREATE TABLE IF NOT EXISTS kontakte" +
                "(kontakteid INTEGER PRIMARY KEY AUTOINCREMENT," +
                "name text NOT NULL," +
                "telefon text NOT NULL);";
            sqlite_cmd.CommandText = CreateSql;
            sqlite_cmd.ExecuteNonQuery();

        }
        /// <summary>
        /// Suchfunktion
        /// Wird durch Button "Find" ausgelöst
        /// </summary>
        /// <param name="findString"></param>
        public void Find(string findString)
        {
            // Doku: https://docs.devart.com/dotconnect/sqlite/Devart.Data.SQLite~Devart.Data.SQLite.SQLiteDataReader~Read.html

            // Leert Liste
            list1.Clear();

            // Entfernt Leerzeichen am Anfang und Ende
            findString = findString.Trim();

            // Abbruch bei leerem String
            if (findString.Length == 0)
                return;

            // Verbindungsaufbau
            SQLiteConnection conn = CreateConnection();
            try
            {
                SQLiteDataReader sqlite_datareader;
                SQLiteCommand sqlite_cmd;
                sqlite_cmd = conn.CreateCommand();

                // SQL-Command zur Suche
                sqlite_cmd.CommandText = $"SELECT kontakteid, name, telefon " +
                        $"FROM `kontakte` " +
                        $"WHERE `name` LIKE '{findString}%'" +
                        $"ORDER BY `name`";

                // Command ausführen
                sqlite_datareader = sqlite_cmd.ExecuteReader();

                // Solange reader ausführen, bis nächstes Ergebnis == null
                while (sqlite_datareader.Read())
                {
                    int v0 = sqlite_datareader.GetInt32(0);
                    string v1 = sqlite_datareader.GetString(1);
                    string v2 = sqlite_datareader.GetString(2);

                    // Logging aller Ergebnisse in Konsole
                    Debug.WriteLine($"{v0}, {v1}, {v2}");

                    // jedes Objekt des Suchergebnisses in list1 speichern
                    list1.Add(new Contact(v0, v1, v2));
                }
                // reader schließen
                sqlite_datareader.Close();
            }
            catch (Exception e)
            {
                // Debug-Logging, falls Exception
                Debug.WriteLine(e.ToString());
            }
            // Verbindung schließen
            conn.Close();
        }

        /// <summary>
        /// Neuen Kontakt hinzufügen
        /// </summary>
        /// <param name="name"></param>
        /// <param name="telefon"></param>
        public void Add(string name, string telefon)
        {
            // Entfernt Leerzeichen am Anfang und Ende
            name = name.Trim();
            telefon = telefon.Trim();

            SQLiteConnection conn = CreateConnection();
            SQLiteCommand sqlite_cmd;
            sqlite_cmd = conn.CreateCommand();

            // Werte aus Textfeldern in Objekt übertragen und dieses zur DB hinzufügen
            // ID wird von DB vergeben
            try
            {
                sqlite_cmd.CommandText = $"INSERT INTO kontakte (name, telefon)" +
                        $"VALUES ('{name}', '{telefon}');";
                sqlite_cmd.ExecuteNonQuery();
            } catch (Exception e)
            {
                Debug.WriteLine(e.ToString());
            }
            // Verbindung schließen
            conn.Close();
        }

        /// <summary>
        /// Bestehenden Kontakt bearbeiten
        /// </summary>
        /// <param name="dbId"></param>
        /// <param name="name"></param>
        /// <param name="telefon"></param>
        public void Edit(int dbId, string name, string telefon)
        {
            name = name.Trim();
            telefon = telefon.Trim();

            SQLiteConnection conn = CreateConnection();

            SQLiteCommand sqlite_cmd;
            sqlite_cmd = conn.CreateCommand();

            try
            {
                sqlite_cmd.CommandText = $"UPDATE kontakte " +
                        $"SET name = '{name}', telefon = '{telefon}'" +
                        $"WHERE kontakteId = {dbId};";
                sqlite_cmd.ExecuteNonQuery();
            }
            catch (Exception e)
            {
                Debug.WriteLine(e.ToString());
            }
            conn.Close();
        }

        public void Delete(int dbId)
        {
            SQLiteConnection conn = CreateConnection();

            SQLiteCommand sqlite_cmd;
            sqlite_cmd = conn.CreateCommand();

            try
            {
                sqlite_cmd.CommandText = $"DELETE FROM kontakte WHERE kontakteId = {dbId};";
                sqlite_cmd.ExecuteNonQuery();
            }
            catch (Exception e)
            {
                Debug.WriteLine(e.ToString());
            }
            conn.Close();
        }
    }
}
