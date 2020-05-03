<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        $title = 'hello to index';
        return view('pages.index',compact('title')); //->with('title',$title);
        }
    public function about(){
        return view('pages.about');
        }
    public function services(){
        $data=[
            'title'=>'The following services are porvided :',
            'services'  => [
                'programming','automation','web design'
            ]
                
            ];
    
        return view('pages.services')->with($data); 
        }
        
}
