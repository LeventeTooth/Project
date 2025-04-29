using CommunityToolkit.Mvvm.ComponentModel;
using CommunityToolkit.Mvvm.Input;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Text;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class RentsController:ObservableObject
    {
        [ObservableProperty]
        private Rent currentRent;

        [ObservableProperty]
        private List<Rent> rents;

        private ApiCaller<Rent> api;

                

        async void Call()
        {
            Rents = await api.Get();
        }

        [RelayCommand]
        async void toMain() => await Shell.Current.GoToAsync("///MainPage");

        public RentsController()
        {
            api = new ApiCaller<Rent>(ENV.Url, "rent");
            Call();
        }
    }
}
