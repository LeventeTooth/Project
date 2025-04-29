using CommunityToolkit.Mvvm.ComponentModel;
using CommunityToolkit.Mvvm.Input;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Text;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class RentsController : ObservableObject
    {
        [ObservableProperty]
        private Rent currentRent;

        [ObservableProperty]
        private List<RentFull> rents;

        private List<Rent> _rents;

        private ApiCaller<Rent> api;
        private ApiCaller<User> userApi;
        private ApiCaller<Track> trackApi;
        private ApiCaller<TrackDay> trackDayApi;
        private ApiCaller<Car> carApi;

        [ObservableProperty]
        private User user;

        private List<User> users;
        private List<Track> tracks;
        private List<Car> cars;
        private List<TrackDay> Track_days;

        [ObservableProperty]
        private Track track;

        [ObservableProperty]
        private Car car;


        async void Call()
        {
            _rents = await api.Get();
            users = await userApi.Get();
            tracks = await trackApi.Get();
            cars = await carApi.Get();
            Track_days = await trackDayApi.Get();
            Rents = new List<RentFull>();

            foreach (var r in _rents)
            {
                RentFull rentFull = new RentFull {
                    Id = r.Id,
                    User = users.FirstOrDefault(u=> u.Id== r.User_id),
                    TrackDay = Track_days.FirstOrDefault(t=> t.Id== r.Track_day),
                    Car = cars.FirstOrDefault(c=> c.Id== r.Car_id),
                    Rent_time = r.Rent_time,
                    Track = tracks.FirstOrDefault(t=> t.Id == Track_days.FirstOrDefault(t => t.Id == r.Track_day).Track_id)

                };
                Rents.Add(rentFull);

            }
            
        }

        [RelayCommand]
        async void toMain() => await Shell.Current.GoToAsync("///MainPage");

        public RentsController()
        {
            api = new ApiCaller<Rent>(ENV.Url, "rent");
            userApi = new ApiCaller<User>(ENV.Url, "user");
            trackApi = new ApiCaller<Track>(ENV.Url, "track");
            carApi = new ApiCaller<Car>(ENV.Url, "car");
            trackDayApi = new ApiCaller<TrackDay>(ENV.Url, "track-day");
            Call();
        }
    }
}
