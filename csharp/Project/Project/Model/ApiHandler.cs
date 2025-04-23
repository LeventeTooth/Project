
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

        public async Task<List<string>> Get() => 
            await httpClient.GetFromJsonAsync<List<string>>("/api/"); 

        public async Task<List<string>> GetById(int id) => 
            await httpClient.GetFromJsonAsync<List<string>>($"/api/{id}"); 

        public async Task Post(string New) => 
            await httpClient.PostAsJsonAsync("/api/", New); 

        public async Task Put(string Modified) => 
            await httpClient.PutAsJsonAsync("/api/", Modified); 

        public async Task Delete(int id) => 
            await httpClient.DeleteAsync($"/api/{id}"); 
    }   
}
