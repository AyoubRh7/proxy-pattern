from abc import ABC, abstractmethod

class DatabaseInterface(ABC):
    @abstractmethod
    def delete_user(self, username: str):
        pass

class RealDatabase(DatabaseInterface):
    def delete_user(self, username: str):
        print(f"User {username} wurde aus der Datenbank gelöscht!")

class DatabaseProxy(DatabaseInterface):
    def __init__(self, user_role: str):
        # TODO: Speichere die Rolle (user_role) in self.user_role
        # TODO: Erstelle eine Instanz von RealDatabase in self.real_database
        pass

    def delete_user(self, username: str):
        # TODO: Prüfe, ob self.user_role == "admin" ist
        # Wenn JA: Rufe delete_user auf self.real_database auf
        # Wenn NEIN: printe "Fehler: Zugriff verweigert!"
        pass

# --- TEST BEREICH ---
# gast_proxy = DatabaseProxy("gast")
# gast_proxy.delete_user("max_mustermann") # Sollte "Zugriff verweigert" ausgeben

# admin_proxy = DatabaseProxy("admin")
# admin_proxy.delete_user("max_mustermann") # Sollte den User löschen
