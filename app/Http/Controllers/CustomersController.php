<?php

namespace App\Http\Controllers;
use App\chum;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        /*$customers = [
            'mike',
            'tonia',
            'chix',
            'Another name'
        ];*/
        return view('internal.customers');//, [
            //'customers' => $customers,
       // ]);
        
    
    
    } 
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function store(){

        $data = request()->validate([
            'name'=> 'required|min:3', //the name field is required and need to be at least 3 characters 
            'email'=> 'required|email'
        ]);

       $customers=new chum();
       $customers->name = (request('name'));
       $customers->email = (request('email')); 
       $customers->save();

        return back();
    }

}