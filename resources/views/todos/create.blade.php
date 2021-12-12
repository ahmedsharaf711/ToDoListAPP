@extends('layouts.app')
@section('title' , 'App-Todo')
@section('content')
         <div class="container">
             
             <div class="row mt-5 justify-content-center">
             <div class="col-md-6">
                 <div class="card">
                     <div class="card-header text-center">
                     <h1>Create A New Todo</h1>  
                     </div>
                     <div class="card-body">
                         <form action="/create" method="POST">
                         @csrf 
  <div class="form-group">
    
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Todo Title" name="todoTitle">
    @error('todoTitle')
    <li>{{$message}}</li>
    @enderror
  </div>
  
 
  <div class="form-group">
    
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Todo Description" name="todoDescription"></textarea>
    @error('todoDescription')
    <li>{{$message}}</li>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary text-center mr-auto">Create</button>
                         </form>
                     </div>
                 </div>
             </div>
             </div>
         </div> 
 @endsection  