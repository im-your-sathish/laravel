<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;


class BookController extends Controller
{

    public function index()
    {
        $userid = session('user')->id;
        
        return view('index', ['books' => book::where('userid',$userid)->get(),'name' => session()->get("user")->name]);
    }

    public function store(Request $request)
    {
        $book = new book();
        $book->bname = $request->bname;
        $book->bauthor = $request->bauthor;
        $book->bprice = $request->bprice;
        $book->userid = session('user')->id;
        $result = $book->save();
        if ($result) {
            return redirect('/books')->with('status', 'Book Added Successfully');
        }
    }

    public function edit($id)
    {
        return view('Edit', ["book" => Book::find($id), 'books' => book::all()]);
    }

    public function update(Request $request)
    {
        $book = Book::find($request->id);
        $book->bname = $request->bname;
        $book->bauthor = $request->bauthor;
        $book->bprice = $request->bprice;
        $book->save();
        return redirect('/books')->with('status', 'Book Details Update Success');
    }

    public function destroy($id)
    {
        book::find($id)->delete();
        return redirect('/books')->with(['status' => 'Book Deleted Success', 'color' => 'danger']);
    }
}
