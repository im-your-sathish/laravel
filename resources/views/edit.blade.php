<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="container">

    @if(session('status'))
    <div class="alert alert-<?php if (session('color')) {
                                echo session('color');
                            } else {
                                echo "success";
                            } ?> alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{session('status')}}
    </div>
    @endif




    <!-- add -->
    <!-- Button to Open the Modal -->
    <button type="button" id="modaladd" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#myModaladd">
        Add book
    </button>
    <span id="modal" data-toggle="modal" data-target="#myModal">
        
                        </span>

 <!-- The Modal -->
 <div class="modal" id="myModaladd">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <form action="{{route('addBook')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="bname">Book Name:</label>
                            <input type="text" name="bname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="bauthor">Book Author:</label>
                            <input type="text" name="bauthor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="bprice">Book Price</label>
                            <input type="text" name="bprice" class="form-control">
                        </div>


                        <button type="submit" class="btn btn-success btn-sm">Add</button>
                    </form>


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- /add  -->

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
               
                    <form action="{{route('update')}}" method="post">
                        @csrf
                        @method("PUT")
                        <input type="text" name="id" class="form-control" value="{{$book->id}}" hidden>
                        <div class="form-group">
                            <label for="bname">Book Name:</label>
                            <input type="text" name="bname" class="form-control" value="{{$book->bname}}">
                        </div>
                        <div class="form-group">
                            <label for="bauthor">Book Author:</label>
                            <input type="text" name="bauthor" class="form-control" value="{{$book->bauthor}}">
                        </div>
                        <div class="form-group">
                            <label for="bprice">Book Price</label>
                            <input type="text" name="bprice" class="form-control" value="{{$book->bprice}}">
                        </div>

                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                    </form>


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- /add  -->


    <table class="table table-hover">
        <thead>
            <tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Book Price</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)

            <tr>
                <td> {{$book->id}}</td>
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




<script>
    $(document).ready(function(){

    $("#modal").hide(); 
    $("#modal").trigger('click'); 

});
    
    </script>


</body>

</html>