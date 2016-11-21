<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model {

    protected $fillable = ['name', 'display_name', 'status'];

    protected $page;

    function __construct()
    {
        $this->page = new Page;
    }

    public function pageExists($pageName, $locale) {

        $result = $this->where([
            'name' => $pageName,
            'locale' => $locale
        ])->first();

        return $result;
    }

    public function getMenus($site, $locale) {
        $result = $this->select('navigations.name as classSlug', 'navigations.display_name as className', 'navigations.locale as locale',
            'navigations.color as color', 'navigations.colorHover as colorHover', 'navigations.colorBgHover as colorBgHover', 'navigations.colorBg as colorBg')
            ->join('site_types', 'navigations.type', '=', 'site_types.id')
            ->where([
                'site_types.slug' => $site,
                'navigations.locale' => $locale
            ])
            ->orderBy('navigations.position')
            ->get();

        return $result;
    }

    public function getSubMenus($locale) {
        $result = $this->select('pages.name as pageName', 'pages.slug as pageSlug', 'navigations.name as classSlug', 'navigations.display_name as className', 'pages.locale as locale')
            ->join('pages', 'navigations.id', '=', 'pages.navigation_id')
            ->where([
                'navigations.locale' => $locale,
                'pages.locale' => $locale
            ])
            ->orderBy('navigations.name')
            ->get();

        return $result;
    }

    public function currentPage($locale, $site, $page) {
        $result = $this->select('navigations.color as color', 'navigations.colorHover as colorHover', 'navigations.colorBgHover as colorBgHover', 'navigations.colorBg as colorBg')
            ->join('site_types', 'navigations.type', '=', 'site_types.id')
            ->where([
                'site_types.slug' => $site,
                'navigations.locale' => $locale,
                'navigations.name' => $page,
            ])
            ->first();

        return $result;
    }
}
