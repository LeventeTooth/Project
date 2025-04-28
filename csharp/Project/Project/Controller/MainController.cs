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

        [ObservableProperty]
        private string text;

        

        private ApiCaller<User> api;
        private AuthenticationController auth;


        [RelayCommand]
        async void run()
        {
            var isAuthed =await  auth.Auth(UserEmail);
            if (isAuthed)
            {
                Text = "Siker";
                
            }
            else { Text = "Not Authorized"; }
        }

        public MainController()
        {
            api = new ApiCaller<User>("http://127.0.0.1:8000/api/","user");
            auth = new AuthenticationController();
        }
    }
}
