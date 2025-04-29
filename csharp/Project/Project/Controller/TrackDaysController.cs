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
    public partial class TrackDaysController: ObservableObject
    {
        [ObservableProperty]
        private TrackDay currentTrackDay;

        [ObservableProperty]
        private List<TrackDay> trackdays;

        private ApiCaller<TrackDay> api;

        async void Call()
        {
            Trackdays = await api.Get();
        }

        [RelayCommand]
        async void toMain() => await Shell.Current.GoToAsync("///MainPage");

        public TrackDaysController()
        {
            api = new ApiCaller<TrackDay>(ENV.Url, "track-day");
            Call();
        }
    }
}
