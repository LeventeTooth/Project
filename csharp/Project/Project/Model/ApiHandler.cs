using Microsoft.UI.Xaml.Controls;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http.Json;
using System.Text;
using System.Threading.Tasks;

namespace Project.Model
{
    public class ApiHandler
    {
        private readonly HttpClient httpClient;

        public string Url { get;  private set; }
        
        public ApiHandler(string url)
        {
            Url = url;
            httpClient = new HttpClient();
            httpClient.BaseAddress = new Uri(Url);
        }

        public async Task<List<string>> Get() => //TODO: the model of the correct class will replace string
            await httpClient.GetFromJsonAsync<List<string>>("/api/"); //TODO: write the correct path- to api

        public async Task<List<string>> GetById(int id) => //TODO: the model of the correct class will replace string
            await httpClient.GetFromJsonAsync<List<string>>($"/api/{id}"); //TODO: write the correct path- to api

        public async Task Post(string New) => //TODO: the model of the correct class will replace string
            await httpClient.PostAsJsonAsync("/api/", New); //TODO: write the correct path- to api

        public async Task Put(string Modified) => //TODO: the model of the correct class will replace string
            await httpClient.PutAsJsonAsync("/api/", Modified); //TODO: write the correct path- to api

        public async Task Delete(int id) => //TODO: the model of the correct class will replace string
            await httpClient.DeleteAsync($"/api/{id}"); //TODO: write the correct path- to api
    }   
}
