import time
from abc import ABC, abstractmethod

class WeatherInterface(ABC):
    @abstractmethod
    def get_weather_data(self, city: str) -> str:
        pass

class WeatherService(WeatherInterface):
    def get_weather_data(self, city: str) -> str:
        print(f"[API] Rufe Daten vom Wetter-Server ab für: {city}...")
        time.sleep(2) # Simuliert Verzögerung
        return "22°C, Sonnig"

class WeatherProxy(WeatherInterface):
    def __init__(self):
        self.weather_service = WeatherService()
        self.cache = {} # Dictionary für das Caching

    def get_weather_data(self, city: str) -> str:
        # TODO: Prüfe, ob city bereits im Dictionary self.cache existiert
        
        # Wenn JA: Printe "[Proxy] Daten aus dem Cache geladen" 
        # und gib den gespeicherten Wert zurück.

        # Wenn NEIN: Rufe self.weather_service.get_weather_data(city) auf,
        # speichere das Ergebnis im Cache und gib es zurück.
        pass

# --- TEST BEREICH ---
# proxy = WeatherProxy()
# print(proxy.get_weather_data("Bonn")) # Erste Abfrage: Dauert 2 Sekunden
# print(proxy.get_weather_data("Bonn")) # Zweite Abfrage: Sofort da!
