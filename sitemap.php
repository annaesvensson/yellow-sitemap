<?php
// Sitemap extension, https://github.com/annaesvensson/yellow-sitemap

class YellowSitemap {
    const VERSION = "1.0.2";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("sitemapLocation", "/sitemap/");
        $this->yellow->system->setDefault("sitemapXmlLocation", "/sitemap.xml");
        $this->yellow->system->setDefault("sitemapPaginationLimit", "30");
    }
    
    // Handle request
    public function onRequest($scheme, $address, $base, $location, $fileName) {
        $statusCode = 0;
        if ($this->isSitemapXmlLocation($location)) {
            $this->yellow->page->fileName = $this->yellow->lookup->findFileFromContentLocation($this->yellow->content->getHomeLocation($location), true).basename($this->yellow->system->get("sitemapXmlLocation"));
            $this->yellow->page->parseMeta("", 200);
            $this->yellow->language->set($this->yellow->page->get("language"));
            $this->onParsePageLayout($this->yellow->page, "sitemap");
            $this->yellow->page->setHeader("Last-Modified", $this->yellow->page->getLastModified(true));
            $statusCode = $this->yellow->sendData($this->yellow->page->statusCode, $this->yellow->page->headerData, $this->yellow->page->outputData);
        }
        return $statusCode;
    }

    // Handle page layout
    public function onParsePageLayout($page, $name) {
        if ($name=="sitemap") {
            $pages = $this->yellow->content->index();
            if ($this->isSitemapXmlLocation($page->location, $page->getRequest("page"))) {
                $page->setLastModified($pages->getModified());
                $page->setHeader("Content-Type", "text/xml; charset=utf-8");
                $output = "<?xml version=\"1.0\" encoding=\"utf-8\"\077>\r\n";
                $output .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\r\n";
                foreach ($pages as $pageSitemap) {
                    $output .= "<url><loc>".$pageSitemap->getUrl()."</loc></url>\r\n";
                }
                $output .= "</urlset>\r\n";
                $page->setOutput($output);
            } else {
                $pages->sort("title");
                $page->setPages("sitemap", $pages);
                $page->setLastModified($pages->getModified());
            }
        }
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $sitemapXmlLocation = $this->yellow->system->get("coreServerBase").$this->getSitemapXmlLocation($page->location);
            $output = "<link rel=\"sitemap\" type=\"text/xml\" href=\"$sitemapXmlLocation\" />\n";
        }
        return $output;
    }
    
    // Return XML location
    public function getSitemapXmlLocation($location) {
        return rtrim($this->yellow->content->getHomeLocation($location), "/").$this->yellow->system->get("sitemapXmlLocation");
    }

    // Check if XML format requested
    public function isSitemapXmlLocation($location, $request = "") {
        $sitemapXmlLocation = $this->getSitemapXmlLocation($location);
        return $location==$sitemapXmlLocation || $request==basename($sitemapXmlLocation);
    }
}
