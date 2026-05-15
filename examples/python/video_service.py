from abc import ABC, abstractmethod

# Interface (Abstrakte Basisklasse in Python)
class IVideoService(ABC):
    @abstractmethod
    def play_video(self, video_id: str):
        pass

# Echtes Objekt
class YouTubeService(IVideoService):
    def play_video(self, video_id: str):
        print(f"Streaming Video: {video_id}...")
