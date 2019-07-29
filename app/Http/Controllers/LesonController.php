<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lesson;

class LesonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lessons = Lesson::all();

    }


   

}
