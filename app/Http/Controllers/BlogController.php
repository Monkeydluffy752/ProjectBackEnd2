<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function loadview($s = 'index')
   {
       $s = str_replace('.html',"",$s);
       return view($s);
   }
}
