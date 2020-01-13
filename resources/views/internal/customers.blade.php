@extends('layout')


@section('content')
    <h1>Customers</h1>
    <form action="" class="pb-5">
        <div class="input-group">
            <input type="text">    
        </div>  
        <button type="submit">Add customer</button>
    </form>   
    
    
    <ul>
            @foreach($customers as $chum) 
            <li>{{ $chum }}</li>
        @endforeach
    
        </ul>
@endsection