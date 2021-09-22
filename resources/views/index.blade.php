@extends('layouts.app')

@section('header')
@parent
@endsection

@section('navbar')
@parent
@endsection

@section('content')
<div class="container jumbotron" style="padding:10px">

    <button type="button" class="btn btn-outline-success btn-sm float-right" data-toggle="modal" data-target="#myModal">
        Add book
    </button>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Add Book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <form action="./addBook" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="bname">Book Name:</label>
                            <input type="text" name="bname" class="form-control" placeholder="Enter Book Name">
                        </div>
                        <div class="form-group">
                            <label for="bauthor">Book Author:</label>
                            <input type="text" name="bauthor" class="form-control" placeholder="Enter Book Author">
                        </div>
                        <div class="form-group">
                            <label for="bprice">Book Price</label>
                            <input type="text" name="bprice" class="form-control" placeholder="Enter Book Price">
                        </div>

                        <button type="submit" class="btn btn-success btn-sm">Add Book</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div style="overflow-x:auto">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Author</th>
                    <th>Book Price</th>
                    <th>Edit Action</th>
                    <th>Delete Action</th>
                </tr>
            </thead>
            <tbody>
                @php 
                $n =1;
                @endphp
                @foreach($books as $book)

                <tr>
                    <td> {{$n++}}</td>
                    <td> {{$book->bname}}</td>
                    <td> {{$book->bauthor}}</td>
                    <td> {{$book->bprice}}</td>
                    <td>

                        <a href="{{ route('book.edit',$book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="./book/delete/{{$book->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection