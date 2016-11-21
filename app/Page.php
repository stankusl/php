<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $table = 'pages';

    public function menu()
    {
        return $this->belongsTo('Navigation');
    }

    public function subPageExists($pageId, $subPage, $locale) {
        return $this->where([
            'navigation_id' => $pageId,
            'slug' => $subPage,
            'locale' => $locale
        ])->first();
    }

    public function getPageContent($locale, $site, $page, $subPage){
        $result = $this->select('pages.data as data')
            ->join('navigations', 'pages.navigation_id', '=', 'navigations.id')
            ->join('site_types', 'navigations.type', '=', 'site_types.id')
            ->where([
                'navigations.locale' => $locale,
                'pages.locale' => $locale,
                'pages.slug' => $subPage,
                'navigations.name' => $page,
                'site_types.slug' => $site
            ])
            ->first();

        return json_decode($result['data'], true);
    }

    public function getMainContent($locale, $site){
        $result = $this->select('pages.data as data')
            ->join('site_types', 'pages.site_id', '=', 'site_types.id')
            ->where([
                'pages.locale' => $locale,
                'pages.navigation_id' => 0,
                'site_types.slug' => $site
            ])
            ->first();

        return json_decode($result['data'], true);
    }
}
