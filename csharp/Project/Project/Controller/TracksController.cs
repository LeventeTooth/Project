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
        private string currentName;
        [ObservableProperty]
        private string currentLocation;
        [ObservableProperty]
        private string currentPrice;
        [ObservableProperty]
        private string currentImg;
        [ObservableProperty]
        private int? currentId;
        private bool isModify;

        [ObservableProperty]
        private List<Track> tracks;

        private ApiCaller<Track> api;

        async void Call()
        {
            Tracks = await api.Get();
        }

        [RelayCommand]
        async void toMain() => await Shell.Current.GoToAsync("///MainPage");

        [RelayCommand]
        async void add()
        {
            List<KeyValuePair<string, string>> newTrack =
                new List<KeyValuePair<string, string>> {
                new KeyValuePair<string, string> ("name",$"{CurrentName}" ),
                new KeyValuePair<string, string> ("location",$"{CurrentLocation}" ),
                new KeyValuePair<string, string> ("price",$"{CurrentPrice}" ),
                new KeyValuePair<string, string> ("img",$"{CurrentImg}" ),
                };

            if (!isModify)
            {
                await api.Post(newTrack);
            }
            else
            {
                await api.Update(newTrack, (int)CurrentId);
                isModify = false;
            }
            CurrentName = "";
            CurrentLocation = "";
            CurrentPrice = "";
            CurrentImg = "";
            CurrentId = null;

            Call();
        }

        [RelayCommand]
        async void modify(int id = 1)
        {
            isModify = true;
            Track track = await api.GetOne(id);
            CurrentId = id;
            CurrentName = track.Name;
            CurrentLocation = track.Location;
            CurrentPrice = track.Price.ToString();
            CurrentImg = track.Img;

        }

        [RelayCommand]
        async void delete(int id = 1)
        {
            await api.Delete(id);
            Call();
        }

        public TracksController()
        {
            isModify = false;
            api = new ApiCaller<Track>(ENV.Url, "track");
            Call();

        }
    }
}
