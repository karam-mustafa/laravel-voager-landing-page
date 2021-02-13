<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

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
        $sections = Section::with(['simpleTexts' , 'modalCards'])->get();
        $footer = Footer::all();
        $links = [];
        return view('welcome' , compact(['sections' , 'footer' , 'links']));
    }
}
