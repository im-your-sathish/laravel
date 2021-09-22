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
                <th>Edit Action</th>
                <th>Delete Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td> {{$user->id}}</td>
                <td> {{$user->name}}</td>
                <td> {{$user->email}}</td>
                <td> {{$user->mobile}}</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                </td>
                <td>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection