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
    public partial class MainController: ObservableObject
    {
        [ObservableProperty]
        private string userEmail;

        private ApiCaller<Car> api;
        private AuthenticationController auth;


        [RelayCommand]
        async void run()
        {
            var isAuthed = auth.Auth(userEmail);
        }

        public MainController()
        {
            api = new ApiCaller<Car>("http://127.0.0.1:8000/api/","");
            auth = new AuthenticationController();
        }
    }
}
