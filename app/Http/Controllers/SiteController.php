<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Vertex\Url;
use Illuminate\Http\Request;

class SiteController extends Controller {

    protected $nav;

    public function __construct()
    {
        $this->nav = new Url;
    }

    public function index()
    {
        return view('pages.cftr.index')->with([
            'pageClass' => 'cftr'
        ]);
    }

    public function getPage($country, $site, $page = null, $subPage = null)
    {
        return $this->nav->getPage($country, $site, $page, $subPage);
    }

    public function sitemap($site)
    {
        return view('pages.{$site}.sitemap')->with([
            'pageClass' => $site
        ]);
    }
}
