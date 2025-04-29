using CommunityToolkit.Mvvm.ComponentModel;
using CommunityToolkit.Mvvm.Input;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Reflection.Metadata.Ecma335;
using System.Text;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class CarsController :ObservableObject
    {
        [ObservableProperty]
        private Car currentCar;

        [ObservableProperty]
        private List<Car> cars;

        private ApiCaller<Car> api;

        async void Call()
        {
            Cars = await api.Get();
        }

        [RelayCommand]
        async void toMain()=> await Shell.Current.GoToAsync("///MainPage");

        public CarsController()
        {
            api = new ApiCaller<Car>(ENV.Url,"car");
            Call();
        }

    }
}
