using MauiApp1.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MauiApp1.ViewModels
{
    internal class ListViewModel
    {
        public List<ListModel> Lists { get; set; }
        public ListViewModel()
        {
            Lists = new List<ListModel>()
            {
                new ListModel() { Name="Test", Description="Beschreibung"},
                new ListModel() { Name="Test2", Description="Beschreibung2"}
            };
        }
    }
}
