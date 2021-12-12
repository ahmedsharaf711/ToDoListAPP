@extends('layouts.app')
@section('title' , 'App-Todo')
@section('content')
         <div class="container">
             <div class="pt-3 row justify-content-center">
                 <div class="card" style="width:50%">
                     <div class="text-center card-header">
                     <h1>All Todos</h1>  
                     </div>
                     @if(Session::has('status'))
                     <div class="alert alert-success">{{Session::get('status')}}</div>
                     @endif
                     <div class="card-body">
                         <ul class="list-group">
                       
          @forelse ($todos as $todo)
           <li class="last-group-item text-muted">{{$todo->title}}

           
             



           

          




           <span class="float-right mr-2">
                      <a href="/todos/{{$todo->id}}/delete" style="color:#00bmd4">
                      
                      <i class="fas fa-trash-alt"></i>
                      </a>
                      </span>




                      <span class="float-right mr-2">
                      <a href="/todos/{{$todo->id}}/edit"  style="color:#f44326">
                      <i class="fas fa-pencil-alt"></i>
                      </a>
                      </span>  


                   

                      <span class="float-right mr-2">
                      <a href="/todos/{{$todo->id}}" style="color:#f44326">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                      </span>







           @if(!$todo->Completed)
                     <span class="float-right mr-2">
                      <a href="/todos/{{$todo->id}}/complete" style="color:#ff9800">
                      <i class="fas fa-check"></i>
                      </a>
                      </span>
                      
                    </li>
            @endif
           @empty
           <p class="text-center">No Todos</p>
          @endforelse
                         </ul>
                     </div>
                 </div>
             </div>
         </div> 
 @endsection 