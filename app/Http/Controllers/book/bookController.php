<?php

namespace App\Http\Controllers\book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class bookController extends Controller
{
    //
    function inputbook(Request $request){
        return view('book.inPutBook');
    }
    function inputcategory(Request $request){
        return view('book.inputCategory');
    }
    // BookController
    function insertbook(Request $request){
        $categoryId = $request->categoryId;
        $title = $request->title;
        $content = $request->content;
        $price = $request->price;
        $href_param = $request->href_param;
        $create_date = $request->create_date;
        $update_date =$request->update_date ;
        DB::table('book')->insert([
            'categoryId' => $categoryId,
            'title' => $title,
            'content' => $content,
            'price' => $price,
            'href_param' => $href_param,
            'create_date' => $create_date,
            'update_date' =>$update_date 
        ]);
        return redirect()->route('displayBook');
    }
    function displaybook(){
       $bookList=DB::table('book')->get();

       return view('book.bookview')->with([
           'bookList' => $bookList,
           'index'=> 0
       ]);
    }
    function displaybookofcategory($id){
        $bookList=DB::table('book')->where('categoryId',$id)->get();
 
        return view('book.bookview')->with([
            'bookList' => $bookList,
            'index'=> 0
        ]);
     }
     function serchbook(Request $request){
        $bookList=DB::table('book')->where('title','like','%'.$request->s.'%')->get();
 
        return view('book.bookview')->with([
            'bookList' => $bookList,
            'index'=> 0
        ]);
     }
      // category Controller
    function insertcategory(Request $request){
        $category = $request->category;
       
        DB::table('category')->insert([
            'category' => $category,
            
        ]);
        return redirect()->route('displayCategory');
    }
    function displaycategory(){
       $categoryList=DB::table('category')->get();

       return view('book.categoryview')->with([
           'categoryList' => $categoryList,
           'index'=> 0
       ]);
    }
    function displaycategoryofid($id){
        $categoryList=DB::table('category')->where('id',$id)->get();
 
        return view('book.categoryview')->with([
            'categoryList' => $categoryList,
            'index'=> 0
        ]);
     }
     //main
     function viewmain(Request $request){
           return view('book.main');
     }

     function dataFormain(){
        $categoryList=DB::table('category')->get();
        $bookList=DB::table('book')->get();

        return view('book.main')->with([
            'categoryList' => $categoryList,
            'bookList' => $bookList
        ]);
     }
     function searchbook(Request $request){
        $categoryList=DB::table('category')->get();

        $bookList=DB::table('book')->where('title','like','%'.$request->s.'%')->get();
 
        return view('book.main')->with([
            'bookList' => $bookList,
            'categoryList' => $categoryList
        ]);
     }
     function mainbookofcategory($id){
        $bookList=DB::table('book')->where('categoryId',$id)->get();
        $categoryList=DB::table('category')->get();

        return view('book.main')->with([
            'bookList' => $bookList,
            'categoryList' => $categoryList
        ]);
     }
     function bookDetail($href_param){
        $book=DB::table('book')->where('href_param',$href_param)->first();
        return view('book.bookDetail')->with([
            'book' => $book
        ]);
     }
}
