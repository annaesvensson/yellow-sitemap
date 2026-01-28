# Sitemap 0.9.3

Webbplatskarta med alla sidor. Utvecklad av Anna Svensson.

<p align="center"><img src="screenshot.png" alt="Skärmdump"></p>

## Hur man installerar ett tillägg

[Ladda ner ZIP-filen](https://github.com/annaesvensson/yellow-sitemap/archive/refs/heads/main.zip) och kopiera den till din `system/extensions` mapp. [Läs mer om tillägg](https://github.com/annaesvensson/yellow-update/tree/main/readme-sv.md).

## Hur man använder en webbplatskarta 

Webbplatskartan är tillgänglig som `http://website/sitemap/` och `http://website/sitemap/page:sitemap.xml`. Den första länken är en mänskligt läsbar webbplatskarta och den andra länken är en maskinläsbar webbplatskarta, för att informera sökmotorer om vad som är tillgängligt för indexering. Det är en översikt över hela webbplatsen, endast synliga sidor ingår.

Om du inte vill att en sida ska synas, ställ in `Status: unlisted` i [sidinställningar](https://github.com/annaesvensson/yellow-core/tree/main/readme-sv.md#inställningar-page) högst upp på en sida.

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

Innehållsfil med olistad sida:

    ---
    Title: Olistad sida
    Status: unlisted
    ---
    Den här sidan är inte synlig i webbplatskartan.

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`SitemapLocation` = plats för webbplatskartan  
`SitemapFileXml` = filnamn för webbplatskartan med XML-information  
`SitemapPaginationLimit` = antal inlägg att visa per sida, 0 för obegränsad  

Följande filer kan anpassas:

`system/layouts/sitemap.html` = layoutfil för webbplatskarta  

Har du några frågor? [Få hjälp](https://datenstrom.se/sv/yellow/help/).
