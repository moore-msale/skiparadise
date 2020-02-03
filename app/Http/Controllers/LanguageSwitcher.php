<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher extends Controller
{
    public function set($lang) {
        Session::put(['applocale' => $lang]);
        return back();
    }
}
