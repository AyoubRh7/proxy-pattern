using System;
using System.Collections.Generic;
using System.Threading;

namespace ProxyPatternExercise2
{
    public interface IWeather {
        string GetWeatherData(string city);
    }

    public class WeatherService : IWeather {
        public string GetWeatherData(string city) {
            Console.WriteLine($"[API] Rufe Daten vom Wetter-Server ab für: {city}...");
            Thread.Sleep(2000); // Simuliert 2 Sekunden Verzögerung
            return "22°C, Sonnig";
        }
    }

    public class WeatherProxy : IWeather {
        private WeatherService _weatherService;
        private Dictionary<string, string> _cache;

        public WeatherProxy() {
            _weatherService = new WeatherService();
            _cache = new Dictionary<string, string>();
        }

        public string GetWeatherData(string city) {
            // TODO: Prüfe mit _cache.ContainsKey(city), ob die Stadt im Cache ist
            
            // Wenn JA: Console.WriteLine("[Proxy] Daten aus dem Cache geladen");
            // und gib den Wert aus dem Dictionary zurück.

            // Wenn NEIN: Rufe den Service auf, füge das Ergebnis mit _cache.Add(city, result)
            // hinzu und gib das Ergebnis zurück.

            return ""; 
        }
    }
}
