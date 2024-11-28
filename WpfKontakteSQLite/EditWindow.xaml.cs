using System.Linq;
using System.Windows;

namespace WpfKontakteSQLite
{
    /// <summary>
    /// Interaktionslogik für EditWindow.xaml
    /// </summary>
    public partial class EditWindow : Window
    {
        // Unsere Klasse "Data" enthält alle Daten der Applikation. Stelle hier die Instanz data her.
        Data data = new Data();

        // Felder
        bool newContact = true;
        int actualDbId = 0;
        string actualName = "";
        string actualTelefon = "";

        /// <summary>
        /// Konstruktor 
        /// </summary>
        /// <param name="headline"></param>
        /// <param name="newContact"></param>
        public EditWindow(string headline, bool newContact)
        {
            InitializeComponent();

            lblHeadline.Content = headline;
            this.newContact = newContact;
        }

        public EditWindow(string headline, bool newContact, int dbId, string actualName, string actualTelefon)
        {
            InitializeComponent();

            lblHeadline.Content = headline;
            this.newContact = newContact;
            this.actualDbId = dbId;
            this.actualName = actualName;
            this.actualTelefon = actualTelefon;

            if (!newContact)
            {
                tbName.Text = actualName;
                tbTelefon.Text = actualTelefon;
            }
        }

        private void btnSave_Click(object sender, RoutedEventArgs e)
        {
            string newName = tbName.Text.Trim();
            string newTelefon = tbTelefon.Text.Trim();
            if (newName.Count() > 0 && newTelefon.Count() > 0)
            {
                if(newContact)
                {
                    data.Add(newName, newTelefon);

                    DialogResult = true;  // Damit wird dieses Window auch geschlossen.
                } 
                else
                {
                    data.Edit(actualDbId, tbName.Text, tbTelefon.Text);

                    DialogResult = true;  // Damit wird dieses Window auch geschlossen.
                }
            }
            else
            {
                string messageBoxText = $"Both name and telefon values required.";
                string caption = "Data was not saved";
                MessageBoxButton button = MessageBoxButton.OK;
                MessageBoxImage icon = MessageBoxImage.Exclamation;
                MessageBox.Show(messageBoxText, caption, button, icon);
            }
        }

        private void btnCancel_Click(object sender, RoutedEventArgs e)
        {
            DialogResult = false;  // Damit wird dieses Window auch geschlossen.
        }
    }
}
