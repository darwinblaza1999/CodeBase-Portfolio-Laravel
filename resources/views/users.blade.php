@extends('layouts.app')
@section('content')
    <div class="container">
    <br><br>
    <a class="nav-link btn btn-warning btn-sm"  
        style="cursor:pointer; width:6%;"
        data-toggle="modal" 
        data-target="#registerModal"><i class="fa fa-user-plus" aria-hidden="true">&nbsp;{{ __('') }}</i></a> 
        
    @include('auth_modal.register')
    <br><br>
        <table class="table table-striped table-hover"> 
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
               @foreach($users as $user)  
                <tr>  
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>
    </div>
@endsection