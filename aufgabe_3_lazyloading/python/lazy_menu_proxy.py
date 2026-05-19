from abc import ABC, abstractmethod

class MenuInterface(ABC):
    @abstractmethod
    def display(self):
        pass

class RealMenuManager(MenuInterface):
    def __init__(self, file_name: str):
        self.file_name = file_name
        self._load_pdf_from_disk()

    def _load_pdf_from_disk(self):
        print(f"[RAM] Lade riesige PDF-Datei ({self.file_name}) in den Arbeitsspeicher... (50MB)")

    def display(self):
        print(f"[Anzeige] Zeige Speiseplan {self.file_name} auf dem Bildschirm an.")

class LazyMenuProxy(MenuInterface):
    def __init__(self, file_name: str):
        # TODO: Speichere den Dateinamen. 
        # Setze self.real_menu_manager initial auf None.
        pass

    def display(self):
        # TODO: Prüfe, ob self.real_menu_manager None ist.
        # Wenn JA: Erstelle jetzt die Instanz von RealMenuManager.
        
        # Rufe danach display() auf dem echten Objekt auf.
        pass

# --- TEST BEREICH ---
# menu = LazyMenuProxy("Speiseplan_Juni_2026.pdf")
# print("Proxy erstellt. Kein RAM verbraucht...")
# menu.display() # Erst jetzt wird geladen!
