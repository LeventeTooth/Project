using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Model
{
    public class TrackDay
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public string Date {  get; set; }
        public int Track_id { get; set; }
        public string? Created_at { get; set; }
        public string? Updated_at { get; set; }
        public string? Deleted_at { get; set; }
    }
}
