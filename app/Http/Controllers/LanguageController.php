<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LanguageController extends Controller
{
    public function change($lang){
        if (array_key_exists($lang, Config::get('app.languages'))){
            Session::put('locale', $lang);
        }
        return redirect()->back();
    }
}
