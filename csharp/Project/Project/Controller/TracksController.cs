using CommunityToolkit.Mvvm.ComponentModel;
using CommunityToolkit.Mvvm.Input;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class TracksController :ObservableObject
    {
        [ObservableProperty]
        private Track currentTrack;

        [ObservableProperty]
        private List<Track> tracks;

        private ApiCaller<Track> api;

        async void Call()
        {
            Tracks = await api.Get();
        }

        [RelayCommand]
        async void toMain() => await Shell.Current.GoToAsync("///MainPage");

        public TracksController()
        {
            api = new ApiCaller<Track>(ENV.Url, "track");
            Call();
        }
    }
}
