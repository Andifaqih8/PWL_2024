<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function about()
   {
       return 'Nama: [Faqih], NIM: [2241760124]';
   }
}