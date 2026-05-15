using System;

namespace ProxyPatternExamples 
{
    // Interface
    public interface IVideoService {
        void PlayVideo(string id);
    }

    // Echtes Objekt
    public class YouTubeService : IVideoService {
        public void PlayVideo(string id) {
            Console.WriteLine($"Streaming Video: {id}...");
        }
    }
}
