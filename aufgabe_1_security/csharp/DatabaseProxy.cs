using System;

namespace ProxyPatternExercise1
{
    public interface IDatabase {
        void DeleteUser(string username);
    }

    public class RealDatabase : IDatabase {
        public void DeleteUser(string username) {
            Console.WriteLine($"User {username} wurde aus der Datenbank gelöscht!");
        }
    }

    public class DatabaseProxy : IDatabase {
        private RealDatabase _realDatabase;
        private string _userRole;

        public DatabaseProxy(string userRole) {
            // TODO: Speichere userRole in _userRole
            // TODO: Initialisiere _realDatabase = new RealDatabase();
        }

        public void DeleteUser(string username) {
            // TODO: Prüfe, ob _userRole == "admin" ist
            // Wenn JA: Rufe _realDatabase.DeleteUser auf
            // Wenn NEIN: Console.WriteLine("Fehler: Zugriff verweigert!");
        }
    }

    /* TEST BEREICH (Kopiere dies in eine Main Methode)
    IDatabase gastProxy = new DatabaseProxy("gast");
    gastProxy.DeleteUser("max_mustermann"); // Sollte "Zugriff verweigert" ausgeben

    IDatabase adminProxy = new DatabaseProxy("admin");
    adminProxy.DeleteUser("max_mustermann"); // Sollte den User löschen
    */
}
