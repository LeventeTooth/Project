using CommunityToolkit.Mvvm.ComponentModel;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class MainController: ObservableObject
    {
        [ObservableProperty]
        private string text;

        private ApiHandler handler;


        public MainController()
        {

            Text = "Hello";
        }
    }
}
