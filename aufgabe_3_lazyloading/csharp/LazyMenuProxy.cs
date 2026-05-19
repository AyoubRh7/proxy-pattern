using System;

namespace ProxyPatternExercise3
{
    public interface IMenu {
        void Display();
    }

    public class RealMenuManager : IMenu {
        private string _fileName;

        public RealMenuManager(string fileName) {
            _fileName = fileName;
            LoadPdfFromDisk();
        }

        private void LoadPdfFromDisk() {
            Console.WriteLine($"[RAM] Lade riesige PDF-Datei ({_fileName}) in den Arbeitsspeicher... (50MB)");
        }

        public void Display() {
            Console.WriteLine($"[Anzeige] Zeige Speiseplan {_fileName} auf dem Bildschirm an.");
        }
    }

    public class LazyMenuProxy : IMenu {
        private RealMenuManager _realMenuManager = null;
        private string _fileName;

        public LazyMenuProxy(string fileName) {
            // TODO: Dateiname speichern.
        }

        public void Display() {
            // TODO: Prüfe, ob _realMenuManager == null ist.
            // Wenn JA: _realMenuManager = new RealMenuManager(_fileName);

            // Rufe danach _realMenuManager.Display(); auf.
        }
    }
}
