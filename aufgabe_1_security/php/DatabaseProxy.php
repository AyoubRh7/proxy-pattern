<?php

interface DatabaseInterface {
    public function deleteUser(string $username): void;
}

class RealDatabase implements DatabaseInterface {
    public function deleteUser(string $username): void {
        echo "User {$username} wurde aus der Datenbank gelöscht!\n";
    }
}

class DatabaseProxy implements DatabaseInterface {
    private RealDatabase $realDatabase;
    private string $userRole;

    public function __construct(string $userRole) {
        // TODO: Speichere die Rolle in der Eigenschaft $userRole
        // TODO: Initialisiere das $realDatabase Objekt
    }

    public function deleteUser(string $username): void {
        // TODO: Prüfe, ob $this->userRole gleich "admin" ist
        // Wenn JA: Rufe deleteUser auf der $realDatabase auf
        // Wenn NEIN: Gib echo "Fehler: Zugriff verweigert!\n"; aus
    }
}

// --- TEST BEREICH ---
// $gastProxy = new DatabaseProxy("gast");
// $gastProxy->deleteUser("max_mustermann"); // Sollte "Zugriff verweigert" ausgeben

// $adminProxy = new DatabaseProxy("admin");
// $adminProxy->deleteUser("max_mustermann"); // Sollte den User löschen
