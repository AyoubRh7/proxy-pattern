<?php

interface MenuInterface {
    public function display(): void;
}

class RealMenuManager implements MenuInterface {
    private string $fileName;

    public function __construct(string $fileName) {
        $this->fileName = $fileName;
        $this->loadPdfFromDisk();
    }

    private function loadPdfFromDisk(): void {
        echo "[RAM] Lade riesige PDF-Datei ({$this->fileName}) in den Arbeitsspeicher... (Verbraucht 50MB)\n";
    }

    public function display(): void {
        echo "[Anzeige] Zeige Speiseplan {$this->fileName} barrierefrei auf dem Bildschirm an.\n";
    }
}

class LazyMenuProxy implements MenuInterface {
    private ?RealMenuManager $realMenuManager = null; // Standardmäßig null
    private string $fileName;

    public function __construct(string $fileName) {
        // TODO: Speichere nur den Dateinamen ab. 
        // Erstelle HIER NOCH NICHT das RealMenuManager-Objekt!
    }

    public function display(): void {
        // TODO: Prüfe, ob $this->realMenuManager gleich null ist.
        // Wenn JA: Erstelle das Objekt jetzt: new RealMenuManager($this->fileName);
        
        // Rufe danach die display() Methode auf dem echten Objekt auf.
    }
}

// --- TEST BEREICH ---
// $menu = new LazyMenuProxy("Speiseplan_Juni_2026.pdf"); 
// echo "Proxy wurde erstellt. Noch ist kein RAM verbraucht...\n";
// $menu->display(); // Erst JETZT wird die Datei geladen und angezeigt!
