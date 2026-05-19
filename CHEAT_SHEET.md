# Proxy Design Pattern — Spickzettel

## Kernkonzept
Ein Proxy ist ein strukturelles Entwurfsmuster, das einen Stellvertreter oder Platzhalter für ein anderes Objekt bereitstellt. Er kontrolliert und steuert den Zugriff auf das Originalobjekt. Dadurch können zusätzliche Operationen ausgeführt werden, bevor oder nachdem die Anfrage das eigentliche Objekt erreicht.

## Die 3 Komponenten
Das Muster basiert auf drei Elementen, die dieselbe Schnittstelle nutzen:
* **Gemeinsames Interface:** Definiert die Methoden, die sowohl vom echten Objekt als auch vom Proxy implementiert werden. Der Client merkt dadurch nicht, dass er mit einem Proxy spricht.
* **Echtes Objekt (Real Subject):** Enthält die eigentliche Business-Logik oder die ressourcenintensive Operation.
* **Proxy-Klasse:** Hält eine Referenz auf das echte Objekt, fängt die Aufrufe ab und leitet sie nach einer Prüfung weiter.

---

## Wichtige Varianten & Anwendungsfälle

### 1. Schutz-Proxy (Zugriffskontrolle)
* **Ziel:** Schützt sensible Systeme vor unbefugten Aufrufen.
* **Funktion:** Er prüft die Rechte oder Rollen des Benutzers, bevor er den Zugriff auf das echte Objekt erlaubt.
* **Szenario:** Nur Benutzer mit der Rolle "Admin" dürfen kritische Daten löschen.

### 2. Virtueller Proxy (Lazy Loading)
* **Ziel:** Schont den Arbeitsspeicher und beschleunigt den Systemstart.
* **Funktion:** Das schwere Originalobjekt wird nicht sofort erstellt, sondern erst in dem Moment instanziiert, in dem der Client es wirklich braucht.
* **Szenario:** Das Laden großer PDF-Dateien oder hochauflösender Bilder wird verzögert, bis der User sie anklickt.

### 3. Cache-Proxy (Performance)
* **Ziel:** Vermeidet doppelte, langsame Berechnungen oder Netzwerk-Anfragen.
* **Funktion:** Er speichert Ergebnisse von Anfragen intern. Bei gleichen Parametern liefert er die Daten sofort aus dem Speicher, ohne das echte Objekt erneut zu bemühen.
* **Szenario:** Zwischenspeichern von langsamen API-Abfragen oder komplexen Datenbank-Abfragen.

---

## Vorteile & Nachteile

### Vorteile
* **Single Responsibility Principle:** Die Verwaltung (Sicherheit, Laden, Caching) ist sauber von der eigentlichen Business-Logik getrennt.
* **Open/Closed Principle:** Neue Schutz- oder Cache-Logiken können hinzugefügt werden, ohne den bestehenden Client-Code zu ändern.
* **Lebenszyklus-Steuerung:** Der Proxy kann die Erstellung und das Löschen des echten Objekts komplett selbst verwalten.

### Nachteile
* **Zusätzliche Komplexität:** Es müssen mehr Klassen und Interfaces im System verwaltet werden.
* **Geringer Overhead:** Durch die Zwischenstation des Proxys kann sich die Reaktionszeit minimal verlängern.
