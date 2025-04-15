using Microsoft.UI.Xaml.Controls;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project.Model
{
    public class ApiHandler
    {
        public string Url { get;  private set; }
        
        public ApiHandler(string url)
        {
            Url = url;
        }

        public string Get() => "";
        public string Post() => "";
        public string Put() => "";
        public string Delete() => "";
    }   
}
