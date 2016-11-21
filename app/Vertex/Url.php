<?php namespace App\Vertex;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Navigation;
use App\SiteType;
use App\Page;

class Url {

    protected $navigation;

    function __construct()
    {
        $this->navigation = new Navigation;
        $this->siteType = new SiteType;
        $this->page = new Page;
    }

    public function getPage($locale, $site, $page = null, $subPage = null)
    {
        /*
         * Checking whether the site exists or not
         */

        if (is_null($this->siteType->siteExists($site))) {
            throw new NotFoundHttpException;
        }

        if(is_null($page) && is_null($subPage))
        {
            return view("layouts.regular")->with([
                'pageClass' => $site,
                'locale'    => $locale,
                'menus'     => $this->navigation->getMenus($site, $locale),
                'subMenus'  => $this->navigation->getSubMenus($locale),
                'content'   => $this->page->getMainContent($locale, $site),
                'colors'    => $this->navigation->currentPage($locale, $site, $page)
            ]);
        }

        /*
         * Checking whether the page exists or not
         */

        if (is_null($this->navigation->pageExists($page, $locale))) {
            throw new NotFoundHttpException;
        }

        $pageId = $this->navigation->pageExists($page, $locale)->id;

        /*
         * Checking whether the sub-menu exists or not
         */

        if (is_null($this->page->subPageExists($pageId, $subPage, $locale))) {
            throw new NotFoundHttpException;
        }

        return view("layouts.regular")->with([
            'pageClass' => $site,
            'locale'    => $locale,
            'page'      => $page,
            'pageName'  => $subPage,
            'menus'     => $this->navigation->getMenus($site, $locale),
            'subMenus'  => $this->navigation->getSubMenus($locale),
            'content'   => $this->page->getPageContent($locale, $site, $page, $subPage),
            'colors'    => $this->navigation->currentPage($locale, $site, $page)
        ]);
    }

}