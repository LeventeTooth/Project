using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Model
{
    public class Car
    {
        public int Id { get; set; }
        public string License_plate { get; set; }
        public string Model { get; set; }
        public int Price { get; set; }
        public string Power { get; set; }
        public string? Created_at { get; set; }
        public string? Updated_at { get; set; }
        public string? Deleted_at { get; set; }
    }
}
