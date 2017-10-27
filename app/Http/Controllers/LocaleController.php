<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use Session;
use Config;
use App;

class LocaleController extends Controller
{
    /*
    public function chooser (Request $request) {
        $lang= $request->input("locale");
        if (array_key_exists($lang, Config::get('languages'))) {
                    Session::put('locale', $lang);
                }
                return Redirect::back();
        }
*/
public function set_lang (Request $request, $lang) {
        switch($lang){
            case 'en':
                App::setLocale('en');
                Session::put('locale', App::getLocale());
                break;
            case 'tw':
                App::setLocale('tw');
                Session::put('locale', App::getLocale());
                break;
            default:
                App::setLocale(config('app.fallback_locale'));
                Session::put('locale', App::getLocale());
                break;
        }
                return Redirect::back();
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
