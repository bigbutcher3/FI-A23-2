using System.Collections.ObjectModel;
using System.Windows;

namespace WindowDemo
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        ObservableCollection<Contact> list = new ObservableCollection<Contact>();

        public MainWindow()
        {
            InitializeComponent();
            list.Add(new Contact(1, "Peter", "0123456789"));
            list.Add(new Contact(2, "Hans", "0123456789"));
            dg1.ItemsSource = list;
        }

        private void btnAdd_Click(object sender, RoutedEventArgs e)
        {
            list.Add(new Contact(list.Last().id + 1, "new", "0000000000"));
        }

        private void btnDelete_Click(object sender, RoutedEventArgs e)
        {
            int nr = dg1.SelectedIndex;
            if (nr >= 0)
            {
                list.RemoveAt(nr);
            }
        }
    }
}