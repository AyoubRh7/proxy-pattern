<?php

interface WeatherInterface {
    public function getWeatherData(string $city): string;
}

// Der echte Service (simuliert eine langsame API)
class WeatherService implements WeatherInterface {
    public function getWeatherData(string $city): string {
        echo "[API] Rufe Daten vom Wetter-Server ab für: {$city}...\n";
        sleep(2); // Simuliert 2 Sekunden Netzwerk-Verzögerung
        return "22°C, Sonnig";
    }
}

class WeatherProxy implements WeatherInterface {
    private WeatherService $weatherService;
    private array $cache = []; // Hier werden die Ergebnisse gespeichert

    public function __construct() {
        $this->weatherService = new WeatherService();
    }

    public function getWeatherData(string $city): string {
        // TODO: Prüfe, ob die $city bereits als Key im Array $this->cache existiert
        
        // Wenn JA: Gib den gespeicherten Wert direkt zurück und schreibe:
        // echo "[Proxy] Daten aus dem Cache geladen für: {$city}\n";

        // Wenn NEIN: Rufe den echten Service auf, speichere das Ergebnis im Cache
        // und gib den Wert zurück.
        
        return ""; // Temporärer Rückgabewert
    }
}

// --- TEST BEREICH ---
// $proxy = new WeatherProxy();
// echo $proxy->getWeatherData("Bonn") . "\n"; // Erste Abfrage: Dauert 2 Sekunden (API-Call)
// echo $proxy->getWeatherData("Bonn") . "\n"; // Zweite Abfrage: Sofort da (aus dem Cache!)
