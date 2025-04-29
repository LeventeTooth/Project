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
    public partial class EventsController: ObservableObject
    {
        [ObservableProperty]
        private Event currentEvent;


        [ObservableProperty]
        private List<Event> events;
        private List<Event> events1;

        private List<Track> tracks;

        private ApiCaller<Event> api;
        private ApiCaller<Track> trackApi;

        async void Call()
        {
            Events = await api.Get();
            tracks = await trackApi.Get();

            events1 = new List<Event>();
            foreach (Event e in Events)
            {
                e.TrackName = tracks.FirstOrDefault(t=>t.Id == e.Track_id).Name;
                events1.Add(e);
            }
            Events = events1.ToList();
        }

        [RelayCommand]
        async void toMain() => await Shell.Current.GoToAsync("///MainPage");

        public EventsController()
        {
            
            api = new ApiCaller<Event>(ENV.Url, "event");
            trackApi = new ApiCaller<Track>(ENV.Url, "track");
            Call();
        }
    }
}
