using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Model
{
    public class User
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public string Username { get; set; }
        public string Email { get; set; }
        public string? Email_verified_at { get; set; }
        public string Address { get; set; }
        public DateTime Birth_date { get; set; }
        public int Age { get; set; }
        public int? Group_id { get; set; }
        public string? Created_at { get; set; }
        public string? Updated_at { get; set; }
        public string? Deleted_at { get; set; }
    }
}
