# PHP Advanced Web Crawler

## Features
- Crawls websites listed in `config.php`.
- Extracts URLs, images, and button elements.
- Simulates button clicks.
- Downloads images and saves them to `assets` directory.
- Logs actions and errors in `log.txt`.

## Usage
1. Update websites in `config.php`.
2. Run `index.php` in a browser or execute `php crawler.php` in terminal.
3. Results stored in `results.json`.

## Files
- `config.php`: Website list and config settings.
- `crawler.php`: Main crawler script.
- `UrlParser.php`: Extracts links from HTML.
- `HtmlFetcher.php`: Fetches HTML content.
- `HtmlParser.php`: Parses HTML for elements.
- `ImageDownloader.php`: Downloads images.
- `ButtonClicker.php`: Simulates button interactions.
- `Logger.php`: Logs actions.
- `DataStorage.php`: Manages data saving.
