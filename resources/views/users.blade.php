@extends('layouts.app')

@section('header')
@parent
@endsection

@section('navbar')
@parent

@section('links')

@endsection


@endsection


@section('content')

@if(session('status'))

{{session('status')}}

@endif

<div class="container jumbotron" style="padding:10px">

    <table class="table table-hover">
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Mobile</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td> {{$user->id}}</td>
                <td> {{$user->name}}</td>
                <td> {{$user->email}}</td>
                <td> {{$user->mobile}}</td>
            
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection