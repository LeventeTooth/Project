
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace Project.Model
{
    public class RentFull
    {
        public int Id { get; set; }
        public User User { get; set; }
        public Track Track { get; set; }
        public Car Car { get; set; }
        public string Rent_date_time { get; set; }


        public string UserEmail { get { return User.Email; } }
        public string TrackName { get {  return Track.Name; } }
        public string CarPlate { get { return Car.License_plate; } }
    }
}
