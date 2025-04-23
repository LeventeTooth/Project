using CommunityToolkit.Mvvm.ComponentModel;
using Project.Model;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Controller
{
    public partial class MainController: ObservableObject
    {
        [ObservableProperty]
        private string text;

        private ApiCaller handler, updater;

        async void run()
        {
            //await handler.Post(new List<KeyValuePair<string, string>> { new KeyValuePair<string, string> ("Name", "TestFromCode") });
            await updater.Update(new List<KeyValuePair<string, string>> { new KeyValuePair<string, string>("Name", "Kurva") });
            Text =  $"{await handler.Get()}";

        }

        public MainController()
        {

            handler = new ApiCaller("http://127.0.0.1:8000/api/test");
            updater = new ApiCaller("http://127.0.0.1:8000/api/test/9");
            run();
        }
    }
}
