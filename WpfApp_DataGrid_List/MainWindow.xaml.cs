using System.Collections.ObjectModel;
using System.Linq;
using System.Windows;
using System.Data.SQLite;
using System;

namespace WpfApp_DataGrid_List
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        Data data = new Data();
        string dataSource = @"Data Source=data.sqlite";

        public MainWindow()
        {
            InitializeComponent();
            /*data.list1.Add(new Contact(1, "Max", "0823748"));
            data.list1.Add(new Contact(2, "Moritz", "0823963"));*/
            dg1.ItemsSource = data.list1; // Data Binding
            loadData(dataSource);

        }

        private void loadData(string dataSourceStr)
        {
            try
            {
                using (SQLiteConnection connection = new SQLiteConnection(dataSourceStr))
                {
                    var command = connection.CreateCommand();
                    command.CommandText = @"SELECT * FROM contact;";
                    connection.Open();
                    using (var reader = command.ExecuteReader())
                    {
                        while (reader.Read())
                        {
                            int id = reader.GetInt32(0);
                            string name = reader.GetString(1).ToString();
                            string telefon = reader.GetString(2).ToString();
                            Contact newContact = new Contact(id, name as string, telefon as string);
                            data.list1.Add(newContact);
                        }
                    }
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(@$"Some Error occured:
{ex.Message}", "Error loadData", MessageBoxButton.OK);
            }
        }

        private void btnAdd_Click(object sender, RoutedEventArgs e)
        {
            try
            {
                using (SQLiteConnection connection = new SQLiteConnection(dataSource))
                {
                    if (data.list1.Count > 0)
                    {
                        var command = connection.CreateCommand();
                        connection.Open();
                        command.CommandText = $"INSERT INTO contact (DbId, Name, Telefon) VALUES({data.list1.Last().DbId + 1}, \"Neu\", \"09999999\");";
                        command.ExecuteNonQuery();
                    }
                    else
                    {
                        var command = connection.CreateCommand();
                        connection.Open();
                        command.CommandText = $"INSERT INTO contact (DbId, Name, Telefon) VALUES(1, \"Neu\", \"09999999\");";
                        command.ExecuteNonQuery();
                    }
                }
                data.list1 = new ObservableCollection<Contact>();
                dg1.ItemsSource = data.list1;
                loadData(dataSource);
            }
            catch (Exception ex)
            {
                MessageBox.Show(@$"Some Error occured:
{ex.Message}", "Error btnAdd_Click", MessageBoxButton.OK);
            }


        }
        private void btnDelete_Click(object sender, RoutedEventArgs e)
        {
            try
            {
                var selectedItem = dg1.SelectedItem as Contact;
                int nr = -1;
                if (selectedItem != null) nr = selectedItem.DbId;
                if (nr >= 0) //data.list1.RemoveAt(nr);
                {
                    MessageBox.Show((nr).ToString(), "Deleting ID selected", MessageBoxButton.OK);
                    using (SQLiteConnection connection = new SQLiteConnection(dataSource))
                    {
                        var command = connection.CreateCommand();
                        connection.Open();
                        command.CommandText = $"DELETE FROM contact WHERE DbId={nr};";
                        command.ExecuteNonQuery();
                    }
                    data.list1 = new ObservableCollection<Contact>();
                    dg1.ItemsSource = data.list1;
                    loadData(dataSource);
                }
                else
                {
                    MessageBox.Show("No ID selected", "No ID selected", MessageBoxButton.OK);
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(@$"Some Error occured:
{ex.Message}", "Error btnDelete_Click", MessageBoxButton.OK);
            }
        }

        private void btnSearch_Click(object sender, RoutedEventArgs e)
        {
            data.Suche(txtBoxSearch.Text);
        }

        private void btnEdit_Click(object sender, RoutedEventArgs e)
        {
            //EditWindow.Show();
        }
    }
}
