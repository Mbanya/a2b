<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about (){
        return view('');
    }

    public function contact (){
        return view('pages.contact');
    }

    public function featured (){
        return view('plans.Featured_internships');
    }
    public function special_programs (){
        return view('plans.Special_Programs _internships');
    }
    public function student_ambassador (){
        return view('plans.Student_Ambassador _internships');
    }
    public function platinum_plus (){
        return view('plans.Platinum_Plus _internships');
    }
    public function employers (){
        return view('plans.employers');
    }
}
