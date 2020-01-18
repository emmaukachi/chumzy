@extends('layout')

@section('title','customers')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
    </div>
</div>    
<div class="row">
    <div class="col-12">
        
    <form action="customers" method="POST" class="pb-5">
        
            <label for="name">Name:</label>
            <div class="form-group pb-2">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">      
            <div>{{ $errors->first('name') }}</div>
            </div>  
            
            <label for="email">Email:</label>
            <div class="form-group">
                <input type="text" name="email" value="{{ old('email') }}" class="form-control" >    
            <div>{{ $errors->first('email') }}</div>
            </div>  
                <br>
            <button type="submit" class="btn btn-primary">Add customer</button>
            @csrf
        </form>
    </div>
</div>
    
       
    
    
    {{--<ul>
            @foreach($customers as $chum) 
            <li>{{ $chum }}</li>
        @endforeach
    
        </ul>--}}
@endsection