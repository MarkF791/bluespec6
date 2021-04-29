<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage()
    {
       return view('homepage');
    }
    public function clienthomepage()
    {
       return view('clienthomepage');
    }
    public function contact()
    {
       return view('contact');
    }
    public function threeD()
    {
       return view('threeD');
    }
    public function twoD()
    {
       return view('twoD');
    }
    public function motionGraphics()
    {
       return view('motionGraphics');
    }
    public function logoAnimation()
    {
       return view('logoAnimation');
    }
    public function clientthreeD()
    {
       return view('clientthreeD');
    }
    public function clienttwoD()
    {
       return view('clienttwoD');
    }
    public function clientmotionGraphics()
    {
       return view('clientmotionGraphics');
    }
    public function clientlogoAnimation()
    {
       return view('clientlogoAnimation');
    }
    public function invoices()
    {
       return view('invoices');
    }
    public function videos()
    {
       return view('videos');
    }
}
