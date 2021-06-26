<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LanguageController extends Controller
{
    //
    public function index(request $request, $language)
    {
        if($language){
            session::put('language', $language);
        }
        return redirect()->back();
    }
}
