<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Company extends Controller
{
    
    //
    public function showOptions(){
        return view('home.main');
    }
    
    public function redirectFBReview(){
        $company_name=100063492311650;
        $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
        $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
        $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
        $to="";
        if($iPod||$iPhone||$iPad){
            $to="fb://profile/".$company_name;
        }else if($Android){
            $to="fb://page/".$company_name;
        }
        return Redirect::away($to);
    }
    
    public function redirectGoogleReview(){
        return Redirect::away("https://www.google.com/search?q=google+reviews+browsexpert&oq=google+reviews+browsexpert&aqs=chrome..69i57j69i64l2.8834j0j7&sourceid=chrome&ie=UTF-8#lrd=0x6b12bb5cef8b1e1f:0x963f447562db4212,3,,,");
    }
    
    public function showPriceList(){
        
    }
}
