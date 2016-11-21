<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HCPController extends Controller {

	public function index()
	{
		return view('pages.hcp.index')->with([
            'pageClass' => 'hcp'
        ]);
	}

    public function sitemap()
    {
        return view('pages.hcp.sitemap')->with([
            'pageClass' => 'hcp'
        ]);
    }

    public function page($pageName)
    {
        return view('pages.hcp.'.$pageName)->with([
            'pageClass' => 'hcp',
            'pageName' => $pageName,
        ]);
    }

    public function science($pageName = 'normal-cftr')
    {
        return view('pages.hcp.cftr-science.'.$pageName)->with([
            'pageClass' => 'cftr-science',
            'pageName' => $pageName,
        ]);
    }

    public function resourceshcp($pageName = 'healthcare-pro-resources')
    {
        return view('pages.hcp.resources-hcp.'.$pageName)->with([
            'pageClass' => 'resources-hcp',
            'pageName' => $pageName,
        ]);
    }

    public function kalydeco($pageName = 'what-is-kalydeco')
    {
        return view('pages.hcp.kalydeco.'.$pageName)->with([
            'pageClass' => 'kalydeco',
            'pageName' => $pageName,
        ]);
    }

    public function orkambi($pageName = 'what-is-orkambi')
    {
        return view('pages.hcp.orkambi.'.$pageName)->with([
            'pageClass' => 'orkambi',
            'pageName' => $pageName,
        ]);
    }
}

