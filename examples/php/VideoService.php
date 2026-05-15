<?php
// Interface: Definiert die gemeinsame Sprache für Proxy und echtes Objekt
interface IVideoService {
    public function playVideo(string $id): void;
}

// Echtes Objekt: Die ressourcenintensive Klasse
class YouTubeService implements IVideoService {
    public function playVideo(string $id): void {
        echo "Streaming Video: " . $id . "...\n";
    }
}
