using CommunityToolkit.Mvvm.ComponentModel;
using CommunityToolkit.Mvvm.Input;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Data;
using System.Linq;
using System.Text;
using System.Text.Json;
using System.Text.Json.Nodes;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class MainController : ObservableObject
    {
        [ObservableProperty]
        private string userEmailA;

        [ObservableProperty]
        private string authRespText;

        [ObservableProperty]
        private bool isAuthed;

        private AuthenticationController auth;


        [RelayCommand]
        async void run()
        {
            IsAuthed = await auth.Auth(UserEmailA);
            if (IsAuthed)
            {
                AuthRespText = "Authorized";


              
            }
            else { AuthRespText = "Not Authorized"; }
        }

        [RelayCommand]
        async void toMain() {
            await Shell.Current.GoToAsync("///MainPage");
        }
        [RelayCommand]
        async void toCars() {
            await Shell.Current.GoToAsync("///CarsPage");
        }
        [RelayCommand]
        async void toTracks() {
            await Shell.Current.GoToAsync("///TracksPage");
        }
        [RelayCommand]
        async void toRents() {
            await Shell.Current.GoToAsync("///RentsPage");
        }
        [RelayCommand]
        async void toTrackDays()
        {
            await Shell.Current.GoToAsync("///EventsPage");
        }

        public MainController()
        {
            auth = new AuthenticationController();
            
        }
    }
}
