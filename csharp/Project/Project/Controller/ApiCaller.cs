using Project.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.Json;
using System.Threading.Tasks;

namespace Project.Controller
{
    public class ApiCaller<T>
    {
        private readonly JsonSerializerOptions opt =
            new JsonSerializerOptions { PropertyNameCaseInsensitive = true };

        private string url;
        private string path;
        private int? id;
        public ApiCaller(string url, string path, int? id = null)
        {
            this.url = url;
            this.path = path;
            this.id = id;
        }

        public async Task<List<T>> Get()
        {
            var client = new HttpClient();
            var request = new HttpRequestMessage(HttpMethod.Get, $"{url}{path}");
            var response = await client.SendAsync(request);
            try
            {
                response.EnsureSuccessStatusCode();
            }
            catch (Exception ex) {
                await Shell.Current.DisplayAlert("Error", $"An error has occured during the connection to the server\n{ex.Message}", "Ok");
                toMain();
                return default;
            }
            return JsonSerializer.Deserialize<List<T>>(await response.Content.ReadAsStringAsync(), opt);
        }

        public async Task<T> GetOne(int id)
        {
            this.id = id;
            var client = new HttpClient();
            var request = new HttpRequestMessage(HttpMethod.Get, $"{url}{path}/{id}");
            var response = await client.SendAsync(request);

            try
            {
                response.EnsureSuccessStatusCode();
            }
            catch (Exception ex)
            {
                await Shell.Current.DisplayAlert("Error", $"An error has occured during the connection to the server\n{ex.Message}", "Ok");
                toMain();
                return default;
            }
            return JsonSerializer.Deserialize<T>(await response.Content.ReadAsStringAsync(), opt);
        }

        public async Task<Response> Post(List<KeyValuePair<string, string>> collection)
        {
            var client = new HttpClient();
            var request = new HttpRequestMessage(HttpMethod.Post, $"{url}{path}");

            var content = new FormUrlEncodedContent(collection);
            request.Content = content;
            var response = await client.SendAsync(request);
            try
            {
                response.EnsureSuccessStatusCode();
            }
            catch (Exception ex)
            {
                await Shell.Current.DisplayAlert("Error", $"An error has occured during the connection to the server\n{ex.Message}", "Ok");
                toMain();
                return default;
            }
            return JsonSerializer.Deserialize<Response>(await response.Content.ReadAsStringAsync(), opt);

        }

        public async Task<Response> Update(List<KeyValuePair<string, string>> collection, int id)
        {
            var client = new HttpClient();
            var request = new HttpRequestMessage(HttpMethod.Put, $"{url}{path}/{id}");

            var content = new FormUrlEncodedContent(collection);
            request.Content = content;
            var response = await client.SendAsync(request);
            try
            {
                response.EnsureSuccessStatusCode();
            }
            catch (Exception ex)
            {
                await Shell.Current.DisplayAlert("Error", $"An error has occured during the connection to the server\n{ex.Message}", "Ok");
                toMain();
                return default;
            }
            return JsonSerializer.Deserialize<Response>(await response.Content.ReadAsStringAsync(), opt);


        }

        public async Task<Response> Delete(int id)
        {
            var client = new HttpClient();
            var request = new HttpRequestMessage(HttpMethod.Delete, $"{url}{path}/{id}");
            var response = await client.SendAsync(request);
            try
            {
                response.EnsureSuccessStatusCode();
            }
            catch (Exception ex)
            {
                await Shell.Current.DisplayAlert("Error", "An error has occured during the connection to the server", "Ok");
                toMain();
                return default;
            }
            return JsonSerializer.Deserialize<Response>(await response.Content.ReadAsStringAsync(), opt);

        }

        private async void toMain()
        {
            await Shell.Current.GoToAsync("///MainPage");
        }



    }
}
