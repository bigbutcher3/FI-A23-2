using System.Text.Json;

namespace VerzeichnisÜberwachung
{
    class Program
    {
        static void Main(string[] args)
        {
            var config = LoadConfiguration();
            
            using var watcher = new FileSystemWatcher(config.WatchedDirectory);
            
            watcher.NotifyFilter = NotifyFilters.FileName | NotifyFilters.DirectoryName | NotifyFilters.LastWrite;
            watcher.Filter = "*.*";
            
            watcher.Deleted += (sender, e) => OnChanged(sender, e, config);
            watcher.Changed += (sender, e) => OnChanged(sender, e, config);
            watcher.Created += (sender, e) => OnCreated(sender, e, config);
            
            watcher.EnableRaisingEvents = true;

            Console.WriteLine($"Überwachung von {config.WatchedDirectory} gestartet. Drücken Sie [Enter] zum Beenden. {config.LogFilePath}");
            Console.ReadLine();
        }

        static void OnChanged(object sender, FileSystemEventArgs e, AppConfig config)
        {
            LogAction($"Datei/Verzeichnis {e.ChangeType}: {e.FullPath}", config);
        }

        static void OnCreated(object sender, FileSystemEventArgs e, AppConfig config)
        {
            if (Path.GetExtension(e.FullPath).Equals(".csv", StringComparison.OrdinalIgnoreCase))
            {
                var fileName = Path.GetFileName(e.FullPath);
                var destinationPath = Path.Combine(config.TargetDirectory, fileName);

                File.Move(e.FullPath, destinationPath);
                LogAction($"CSV-Datei verschoben: {e.FullPath} nach {destinationPath}", config);
            }
        }

        static void LogAction(string message, AppConfig config)
        {
            if (config.LogToFile)
            {
                File.AppendAllText(config.LogFilePath, $"{DateTime.Now}: {message}{Environment.NewLine}");
            }
            else
            {
                // Platzhalter für zukünftige Datenbank-Logik
                Console.WriteLine("Datenbanklogging ist noch nicht implementiert.");
            }
        }

        static AppConfig LoadConfiguration()
        {
            var configContent = File.ReadAllText("appsettings.json");
            return JsonSerializer.Deserialize<AppConfig>(configContent);
        }
    }

    class AppConfig
    {
        public string WatchedDirectory { get; set; }
        public string TargetDirectory { get; set; }
        public bool LogToFile { get; set; }
        public string LogFilePath { get; set; }
    }
}
