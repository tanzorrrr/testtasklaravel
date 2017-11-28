<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
public function addItem(Request $request)
{

}
public function readItems(Request $request)
{

return view('admin.books.index',['books'=>Book::orderBY
('created_at','desc')->paginate(10)]);
}
public function editItem(Request $request)
{

}
public function deleteItem(Request $request)
{

}
}
