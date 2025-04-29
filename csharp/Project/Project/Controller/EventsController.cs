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
        private string currentName;
        [ObservableProperty]
        private string currentDate;
        [ObservableProperty]
        private Track currentTrack;
        [ObservableProperty]
        private string currentImg;
        [ObservableProperty]
        private int? currentId;
        private bool isModify;


        [ObservableProperty]
        private List<Event> events;
        private List<Event> events1;

        [ObservableProperty]
        private List<Track> tracks;

        private ApiCaller<Event> api;
        private ApiCaller<Track> trackApi;

        async void Call()
        {
            Events = await api.Get();
            Tracks = await trackApi.Get();

            events1 = new List<Event>();
            foreach (Event e in Events)
            {
                e.TrackName = Tracks.FirstOrDefault(t=>t.Id == e.Track_id).Name;
                events1.Add(e);
            }
            Events = events1.ToList();
        }

        [RelayCommand]
        async void toMain() => await Shell.Current.GoToAsync("///MainPage");

        [RelayCommand]
        async void add()
        {
            List<KeyValuePair<string, string>> newEvent =
                new List<KeyValuePair<string, string>> {
                new KeyValuePair<string, string> ("name",$"{CurrentName}" ),
                new KeyValuePair<string, string> ("date",$"{CurrentDate}" ),
                new KeyValuePair<string, string> ("track_id",$"{currentTrack.Id}" ),
                new KeyValuePair<string, string> ("img",$"{CurrentImg}" ),
                };

            if (!isModify)
            {
                await api.Post(newEvent);
            }
            else
            {
                await api.Update(newEvent, (int)CurrentId);
                isModify = false;
            }
            CurrentName = "";
            CurrentDate = "";
            CurrentTrack = new Track();
            CurrentImg = "";
            CurrentId = null;

            Call();
        }

        [RelayCommand]
        async void modify(int id = 1)
        {
            isModify = true;
            Event @event = await api.GetOne(id);
            CurrentId = id;
            CurrentName = @event.Name;
            CurrentDate = @event.Date;
            CurrentTrack = Tracks.FirstOrDefault(t => t.Id == id);
            CurrentImg = @event.Img;

        }

        [RelayCommand]
        async void delete(int id = 1)
        {
            await api.Delete(id);
            Call();
        }

        public EventsController()
        {
            isModify = false;
            api = new ApiCaller<Event>(ENV.Url, "event");
            trackApi = new ApiCaller<Track>(ENV.Url, "track");
            Call();
        }
    }
}
