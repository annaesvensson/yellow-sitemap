# Sitemap 0.9.3

Sitemap mit allen Seiten. Entwickelt von Anna Svensson.

<p align="center"><img src="screenshot.png" alt="Bildschirmfoto" /></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/annaesvensson/yellow-sitemap/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/readme-de.md).

## Wie man eine Sitemap benutzt

Die Sitemap ist auf deiner Webseite vorhanden als `http://website/sitemap/` und `http://website/sitemap/page:sitemap.xml`. Der erste Link ist eine menschenlesbare Sitemap und der zweite Link ist eine maschinenlesbare Sitemap, um Suchmaschinen zu informieren was für die Indexierung zur Verfügung steht. Es ist eine Übersicht über die gesamte Webseite, nur sichtbare Seiten sind enthalten.

Falls du nicht willst dass eine Seite sichtbar ist, kannst du `Status: unlisted` in den [Seiteneinstellungen](https://github.com/annaesvensson/yellow-core/tree/main/readme-de.md#einstellungen-seite) ganz oben auf einer Seite festlegen.

## Beispiele

Inhaltsdatei mit Link zur Sitemap:

    ---
    Title: Beispielseite
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Alle Seiten anzeigen](/sitemap/).

Inhaltsdatei mit ungelisteter Seite:

    ---
    Title: Ungelistete Seite
    Status: unlisted
    ---
    Diese Seite ist in der Sitemap nicht sichtbar.

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`SitemapLocation` = Ort der Sitemap  
`SitemapFileXml` = Dateiname der Sitemap mit XML-Informationen  
`SitemapPaginationLimit` = Anzahl der Einträge pro Seite, 0 für unbegrenzt  

Die folgenden Dateien können angepasst werden:

`system/layouts/sitemap.html` = Layoutdatei für Sitemap  

Hast du Fragen? [Hilfe finden](https://datenstrom.se/de/yellow/help/).
