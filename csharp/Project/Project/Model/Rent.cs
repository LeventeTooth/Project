using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Model
{
    public class Rent
    {
        public int Id { get; set; }
        public int User_id { get; set; }

        public int Car_id { get; set; }
        public string Rent_time { get; set; }
        public int Event_id { get; set; }

        public string? Created_at { get; set; }
        public string? Updated_at { get; set; }
        public string? Deleted_at { get; set; }
    }
}
 