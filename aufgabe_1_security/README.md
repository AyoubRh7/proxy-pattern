# Aufgabe 1: Der Türsteher (Schutz-Proxy)

**Ziel:** Implementiere Zugriffsschutz (Access Control) mithilfe des Proxy Patterns.

**Szenario:** 
Wir haben eine Datenbank, die Kundendaten löschen kann. Diese Aktion ist sehr sensibel. Nur Benutzer mit der Rolle `admin` dürfen die Methode `deleteUser` ausführen.

**Deine Aufgabe:**
Gehe in den Ordner deiner bevorzugten Programmiersprache (PHP, Python oder C#) und öffne die Datei.
1. Implementiere die Klasse `DatabaseProxy`.
2. Übergebe dem Konstruktor des Proxys die Rolle des Users.
3. Prüfe in der Methode `deleteUser`, ob der User die Rolle "admin" hat.
4. Wenn ja: Rufe das echte Datenbank-Objekt auf. Wenn nein: Gib "Zugriff verweigert" aus.
