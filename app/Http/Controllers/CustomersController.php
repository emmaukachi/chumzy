<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        $customers = [
            'mike',
            'tonia',
            'chix',
            'Another name'
        ];
        return view('internal.customers', [
            'customers' => $customers,
        ]);
        
    
    
    } 
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    
}