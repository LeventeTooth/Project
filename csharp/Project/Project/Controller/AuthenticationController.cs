
using Project.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Controller
{
    public class AuthenticationController
    {
        private ApiCaller<User> api;
        public async Task<bool> Auth(string email)
        {
            return true;
            api = new ApiCaller<User>(ENV.Url, "user");

            var users = await api.Get();
            if (users.FindAll(u=>u.Email == email).Count == 1)
            {
                return true;
            }
            return false;
        }
    }
}
