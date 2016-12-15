<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PageController extends Controller
{
   public function index(){
   		return view('page.welcome');
   }

   public function getAbout(){
   		return view('page.about');
   }

   public function getContact(){
   		return view('page.contact');
   }
}
