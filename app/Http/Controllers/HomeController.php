<?php

namespace App\Http\Controllers;

use App\Models\Section;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     *
     */
    public function index(){
        $sections = Section::with('simpleTexts')->get();
        return view('welcome' , compact('sections'));
    }
}
