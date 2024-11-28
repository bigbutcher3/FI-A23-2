using System;
using System.Collections.ObjectModel;
using System.Data.SQLite;

namespace WpfApp_DataGrid_List
{
    internal class Data
    {
        public ObservableCollection<Contact> list1 = new ObservableCollection<Contact>();

        internal void Suche(string text)
        {
            throw new NotImplementedException();
        }
    }
}
