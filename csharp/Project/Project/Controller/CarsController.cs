using CommunityToolkit.Mvvm.ComponentModel;
using CommunityToolkit.Mvvm.Input;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Reflection.Metadata.Ecma335;
using System.Text;
using System.Text.Json;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class CarsController : ObservableObject
    {
        [ObservableProperty]
        private string currentPlate;
        [ObservableProperty]
        private string currentModel;
        [ObservableProperty]
        private string currentPrice;
        [ObservableProperty]
        private string currentPower;

        [ObservableProperty]
        private List<Car> cars;

        private ApiCaller<Car> api;

        async void Call()
        {
            Cars = await api.Get();
        }

        [RelayCommand]
        async void toMain() => await Shell.Current.GoToAsync("///MainPage");

        [RelayCommand]
        async void add()
        {
            List<KeyValuePair<string, string>> newCar =
                new List<KeyValuePair<string, string>> {
                new KeyValuePair<string, string> ("license_plate",$"{CurrentPlate}" ),
                new KeyValuePair<string, string> ("model",$"{CurrentModel}" ),
                new KeyValuePair<string, string> ("price",$"{CurrentPrice}" ),
                new KeyValuePair<string, string> ("power",$"{CurrentPower}" ),
                };

            await api.Post(newCar);
            CurrentPlate = "";
            CurrentModel = "";
            CurrentPrice = "";
            CurrentPower = "";

            Call();
        }

        public CarsController()
        {
            api = new ApiCaller<Car>(ENV.Url, "car");
            CurrentPlate = "";
            CurrentModel = "";
            CurrentPrice = "";
            CurrentPower = "";
            Call();
        }

    }
}
