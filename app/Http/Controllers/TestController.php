<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function greet($name,$ok){
        return "Hello ".$name." ok lr ".$ok; 
    }

    public function greeting(){
        return "Hello Par"; 
    }

    public function name(){      
    }

    public function about(){
        $name="wwl"; 
        $age="19";
        return view('about', ['n'=>$name, 'a'=>$age]);
    } 


    
}
