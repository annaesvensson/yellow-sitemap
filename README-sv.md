<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Sitemap 0.8.13

Webbplatskarta med alla sidor.

<p align="center"><img src="sitemap-screenshot.png?raw=true" alt="Skärmdump"></p>

## Hur man installerar ett tillägg

[Ladda ner ZIP-filen](https://github.com/annaesvensson/yellow-sitemap/archive/main.zip) och kopiera den till din `system/extensions` mapp. [Läs mer om tillägg](https://github.com/annaesvensson/yellow-update/tree/main/README-sv.md).

## Hur man använder en webbplatskarta 

Webbplatskartan är tillgänglig som `http://website/sitemap/` och `http://website/sitemap/page:sitemap.xml`. Det är en översikt över hela webbplatsen, endast synliga sidor ingår.

## Exempel

Innehållsfil med länk till webbplatskarta:

    ---
    Title: Exempelsida
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Se alla sidor](/sitemap/).

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`SitemapLocation` = plats för webbplatskartan  
`SitemapFileXml` = filnamn för webbplatskartan med XML-information  
`SitemapPaginationLimit` = antal inlägg att visa per sida, 0 för obegränsad  

Följande filer kan anpassas:

`system/layouts/sitemap.html` = layoutfil för webbplatskarta  

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
