using System.Diagnostics;
using System.Windows;

namespace WpfKontakteSQLite
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        // Unsere Klasse "Data" enthält alle Daten der Applikation. Stelle hier die Instanz data her.
        Data data = new Data();

        /// <summary>
        /// Konstruktor
        /// </summary>
        public MainWindow()
        {
            InitializeComponent();

            // Databinding zur ListBox bzw GridBox herstellen
            lstBox1.ItemsSource = data.list1;
        }

        /// <summary>
        /// Data.Find bei Klick auf Button oder
        /// Eingabe in Textfeld (KeyUp Event)
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void btnFind_Click(object sender, RoutedEventArgs e)
        {
            data.Find(tbFind.Text);
        }

        /// <summary>
        /// Öffnet Fenster zum Hinzufügen eines neuen Kontaktes
        /// Textfelder sind leer
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void btnAdd_Click(object sender, RoutedEventArgs e)
        {
            var window = new EditWindow("New Contact", true);
            window.ShowDialog();

            // Nach dem Add: Update der ListBox durch erneutes "Find"
            data.Find(tbFind.Text);  
        }

        /// <summary>
        /// Öffnet Fenster zum Bearbeiten eines Kontaktes
        /// Kontakt in ListBox muss ausgewählt sein, sonst Fehler
        /// Textfelder bereits mit Daten dieses Kontaktes gefüllt
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void btnEdit_Click(object sender, RoutedEventArgs e)
        {
            int lstIndexSelected = lstBox1.SelectedIndex;
            if (lstIndexSelected < 0)
            {
                string messageBoxText = $"No contact selected";
                string caption = "Please select a contact in the list.";
                MessageBoxButton button = MessageBoxButton.OK;
                MessageBoxImage icon = MessageBoxImage.Exclamation;
                MessageBox.Show(messageBoxText, caption, button, icon);

                return;  // Return, wenn kein Eintrag ausgewählt war
            }
            int dbId = data.list1[lstIndexSelected].DbId;
            string? nam = data.list1[lstIndexSelected].Name;
            string? tel = data.list1[lstIndexSelected].Telefon;

            if(nam != null && tel != null)
            { 
                var window = new EditWindow("Edit Contact", false, dbId, nam, tel);
                window.ShowDialog();

                // Nach dem Edit: Update der ListBox durch erneutes "Find"
                data.Find(tbFind.Text);
            }
        }

        /// <summary>
        /// Wenn Kontakt ausgewählt und Klick auf Delete
        /// löschen des Kontaktes
        /// sonst Fehlerfenster mit entsprechender Meldung (Titel, Inhalt und Icon)
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void btnDelete_Click(object sender, RoutedEventArgs e)
        {
            int lstIndexSelected = lstBox1.SelectedIndex;
            if (lstIndexSelected < 0)
            {
                string messageBoxText = $"No contact selected";
                string caption = "Please select a contact in the list.";
                MessageBoxButton button = MessageBoxButton.OK;
                MessageBoxImage icon = MessageBoxImage.Exclamation;
                MessageBox.Show(messageBoxText, caption, button, icon);

                return;  // Return, wenn kein Eintrag ausgewählt war
            }
            int dbId = data.list1[lstIndexSelected].DbId;
            string? nam = data.list1[lstIndexSelected].Name;

            string messageBoxText2 = $"Do you want to delete {nam}?";
            string caption2 = "Contacts";
            MessageBoxButton button2 = MessageBoxButton.YesNo;
            MessageBoxImage icon2 = MessageBoxImage.Question;
            MessageBoxResult result;

            // Fehlerfenster
            result = MessageBox.Show(messageBoxText2, caption2, button2, icon2, MessageBoxResult.Yes);
            // wenn "Ja"
            if(result == MessageBoxResult.Yes)
            {
                // Logging in Debug-Konsole
                Debug.WriteLine("YES DELETE");

                // Löschen des gewählten Eintrags
                data.Delete(dbId);

                // Nach dem Delete: Update der ListBox durch erneutes "Find"
                data.Find(tbFind.Text);
            }
        }
    }
}
