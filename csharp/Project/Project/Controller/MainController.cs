using CommunityToolkit.Mvvm.ComponentModel;
using CommunityToolkit.Mvvm.Input;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Text.Json;
using System.Text.Json.Nodes;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class MainController: ObservableObject
    {
        [ObservableProperty]
        private string text;

        private ApiCaller<Car> handler;

        [ObservableProperty]
        private List<Car> cars;

        [RelayCommand]
        async void run()
        {
            Cars = await handler.Get();
            Text = Cars.Count > 0 ? $"{Cars[0].License_plate}" : "Fck";
        }

        public MainController()
        {
            handler = new ApiCaller<Car>("http://127.0.0.1:8000/api/","cars");
        }
    }
}
