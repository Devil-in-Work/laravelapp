<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $name='Home';
      // return view('pages.index',compact('name'));
      return view('pages.index',)->with('name', $name);
    }
    public function about(){
      $name='about';
      return view('pages.about',)->with('name', $name);
    }
    public function services(){
      $data = array(
        'name' => 'services',
        'services' => ['web' , 'programming']
      );
      return view('pages.services')->with($data);
    }
}
