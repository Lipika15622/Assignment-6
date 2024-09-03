<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
   {
    $jsonString = Storage::get('about.json');
    $about = json_decode($jsonString);  
    return view('index',compact('about'));
    }
    
    public function about(){

        $jsonString = Storage::get('about.json');
        $about = json_decode($jsonString);  
        return view('about', compact('about'));

        }

    public function skill(){

        $jsonString = Storage::get('skill.json');
        $skill = json_decode($jsonString); 
        return view('skill', compact('skill'));
        
    }

    public function show($skill)
    {
        $skills = json_decode(Storage::get('showSkill.json'), true); // Decode JSON to array
        $skill = collect($skills)->where('id', $skill)->first(); // Convert to collection and apply 'where' method

        return view('ShowSkill',compact('skill'));
    }

    public function WorkExperience(){
        return view('WorkExperience');
    }
}
