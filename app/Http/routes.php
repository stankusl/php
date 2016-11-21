<?php
//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => [ 'localize' ] // Route translate middleware
//    ],
//    function()
//    {
//        Route::get('/', 'SiteController@index');
//
//        Route::get('{site}/{page?}/{subPage?}', 'SiteController@getPage');
//    }
//);

//Route::get('{country}', 'SiteController@index');
//Route::get('{country}/{site}/{page?}/{subPage?}', 'SiteController@getPage');
//
//
//











//Route::get('cftr/sitemap', [
//    'as' => 'sitemap', 'uses' => 'CFTRController@sitemap'
//]);
//
//Route::get('cftr/cf-genetics/{PageName}', [
//    'as' => 'cf-genetics', 'uses' => 'CFTRController@genetics'
//]);
//
//Route::get('cftr/cf-and-cftr/{PageName}', [
//    'as' => 'cf-and-cftr', 'uses' => 'CFTRController@cfandcftr'
//]);
//
//Route::get('cftr/symptoms/{PageName}', [
//    'as' => 'symptoms', 'uses' => 'CFTRController@symptoms'
//]);
//
//Route::get('cftr/living-with-cf/{PageName}', [
//    'as' => 'living-with-cf', 'uses' => 'CFTRController@living'
//]);
//
//Route::get('cftr/resources-cftr/{PageName}', [
//    'as' => 'resources-cftr', 'uses' => 'CFTRController@resourcescftr'
//]);
//
//Route::get('cftr/{PageName}', 'CFTRController@page');
//
//
//
//
Route::get('/', 'HCPController@index');
//Route::get('hcp', 'HCPController@index');
//
//Route::get('hcp/sitemap', [
//    'as' => 'sitemap', 'uses' => 'HCPController@sitemap'
//]);
//
//Route::get('hcp/cftr-science/{PageName}', [
//    'as' => 'cftr-science', 'uses' => 'HCPController@science'
//]);
//
//Route::get('hcp/cftr-science', [
//    'as' => 'cftr-science', 'uses' => 'HCPController@science'
//]);
//
//Route::get('hcp/resources-hcp/{PageName}', [
//    'as' => 'resources-hcp', 'uses' => 'HCPController@resourceshcp'
//]);
//
//Route::get('hcp/resources-hcp', [
//    'as' => 'resources-hcp', 'uses' => 'HCPController@resourceshcp'
//]);
//
//Route::get('hcp/kalydeco/{PageName}', [
//    'as' => 'kalydeco', 'uses' => 'HCPController@kalydeco'
//]);
//
//Route::get('hcp/kalydeco', [
//    'as' => 'kalydeco', 'uses' => 'HCPController@kalydeco'
//]);
//
//Route::get('hcp/orkambi/{PageName}', [
//    'as' => 'orkambi', 'uses' => 'HCPController@orkambi'
//]);
//
//Route::get('hcp/orkambi', [
//    'as' => 'orkambi', 'uses' => 'HCPController@orkambi'
//]);
//
//Route::get('hcp/{PageName}', 'HCPController@page');
//

