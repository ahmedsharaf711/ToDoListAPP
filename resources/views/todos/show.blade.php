@extends('layouts.app')
@section('title' , 'Todo_'.$todo->id)
@section('content')
         <div class="container">
         <h1 class="mt-5 text-center">{{$todo->title}}</h1>  
                                <div class="row pt-5 justify-content-center">
                                <div class="col-md-8">
                                                            <div class="card">
                                        <div class="card-header">
                                         <span>Details</span>
                                         <span class="badge badge-warning float-right"> {{boolval($todo->completed) ? 'completed' : 'none completed'}}
</span>
                                        </div>
                                                                <div class="card-body">
                                                                    <ul class="list-group">
                                                                
                                                   
                                                    <li class="last-group-item text-muted">{{$todo->title}}
                                                                <span class="float-right mr-2">
                                                                <a href="">
                                                                <i class="fa fa-trash-0" aria-hidden="true"></i>
                                                                </a>
                                                                </span>



                                                                <span class="float-right mr-2">
                                                                <a href="">
                                                                <i class="fa fa-pencil-square-0" aria-hidden="true"></i>
                                                                </a>
                                                                </span>



                                                                <span class="float-right mr-2">
                                                                <a href="">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </a>
                                                                </span>
                                                    </li>
                                                    
                                                                    </ul>
                                                                </div>
                                                            </div>
                                </div>
                                </div>
         </div> 
@endsection