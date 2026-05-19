# Aufgabe 2: Der Schlaue Speicher (Caching Proxy)

**Ziel:** Erhöhe die Performance einer Anwendung, indem du Daten im Proxy zwischenspeicherst (Caching).

**Szenario:** 
Wir haben einen Service, der Wetterdaten von einer externen API abfragt (`getWeatherData`). Diese Abfrage dauert sehr lange (simuliert durch eine Verzögerung) und kostet Geld pro Aufruf. Wenn ein User mehrmals hintereinander das Wetter für die gleiche Stadt abfragt, soll die API nicht jedes Mal neu gefragt werden.

**Deine Aufgabe:**
Gehe in den Ordner deiner Programmiersprache und öffne die Datei.
1. Implementiere die Klasse `WeatherProxy`.
2. Der Proxy soll ein internes Array/Dictionary (`cache`) besitzen.
3. Wenn `getWeatherData` aufgerufen wird, prüfe zuerst, ob die Daten für diese Stadt bereits im `cache` existieren.
4. Wenn JA: Gib die Daten direkt aus dem Cache zurück (ohne den echten Service aufzurufen!).
5. Wenn NEIN: Rufe den echten `WeatherService` auf, speichere das Ergebnis im `cache` und gib es dann zurück.
