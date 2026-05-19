# Aufgabe 3: Der Faule Arbeiter (Lazy Loading)

**Ziel:** Schone den Arbeitsspeicher (RAM) des Servers, indem du Objekte erst erstellst, wenn sie wirklich gebraucht werden.

**Szenario:** 
Wir haben eine Klasse `CanteenMenuManager`, die alte Speisepläne einer Kantine als riesige PDF-Dokumente aus dem Dateisystem lädt. Das Laden verbraucht sehr viel RAM. Wenn wir eine Liste aller verfügbaren Speisepläne anzeigen, wollen wir nicht sofort alle PDFs in den Speicher laden – sondern erst dann, wenn der User wirklich auf ein bestimmtes Dokument klickt (`display`).

**Deine Aufgabe:**
Gehe in den Ordner deiner Programmiersprache und öffne die Datei.
1. Implementiere die Klasse `LazyMenuProxy`.
2. Das echte Objekt `RealMenuManager` darf **nicht** direkt im Konstruktor des Proxys mit `new` erstellt werden!
3. Wenn `display` aufgerufen wird, prüfe, ob das echte Objekt bereits existiert.
4. Wenn es noch `null` ist: Erstelle das `RealMenuManager` Objekt genau in diesem Moment (Lazy Loading).
5. Rufe danach die `display` Methode des echten Objekts auf.
