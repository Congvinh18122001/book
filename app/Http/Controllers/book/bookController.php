<?php

namespace App\Http\Controllers\book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class bookController extends Controller
{
    //
    function inputbook(Request $request){
        $id=$title = $price =  $href_param = $content='';
        $categoryList=DB::table('category')->get();

        return view('book.inPutBook')->with([
            'id'=>$id,
            'categoryList'=>$categoryList,
            'title' => $title,
            'price' => $price,
            'href_param' => $href_param,
            'content'=>$content
        ]);
    }
    function inputcategory(Request $request){
        $id= '';
        return view('book.inputCategory')->with([
            'id'=>$id
        ]);
    }
    // BookController
    function insertbook(Request $request){
        $bookList=DB::table('book')->get();
        $categoryId = $request->categoryId;
        $title = $request->title;
        $content = $request->content;
        $price = $request->price;
        $href_param = $request->href_param;
        $create_date = $request->create_date;
        $update_date =$request->update_date ;
        $id=$request->id ;
        $isCheck=false;

        foreach ($bookList as $value) {
            # code...
            if ($value->id==$id) {
                # code...
                DB::table('book')
                ->where('id', $value->id)
                ->update([
            'categoryId' => $categoryId,
            'title' => $title,
            'content' => $content,
            'price' => $price,
            'href_param' => $href_param,
            'create_date' => $create_date,
            'update_date' =>$update_date 
                ]);
                $isCheck=true;
            }
        }
       if (!$isCheck) {
           # code...
           DB::table('book')->insert([
            'categoryId' => $categoryId,
            'title' => $title,
            'content' => $content,
            'price' => $price,
            'href_param' => $href_param,
            'create_date' => $create_date,
            'update_date' =>$update_date 
        ]);
       }
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
     function editBook(Request $request,$id){ 
        $categoryList=DB::table('category')->get();
        $book = DB::table('book')->where('id',$id)->first();
        $title = $book->title;
        $price =   $book->price;
        $href_param = $book->href_param;
        $content = $book->content;
        return view('book.inPutBook')->with([
            'id' => $id,
            'categoryList'=>$categoryList,
            'title' => $title,
            'price' => $price,
            'href_param' => $href_param,
            'content'=>$content

        ]);
     }
     function deletebook($id){
        DB::table('book')->where('id',$id)->delete();
        return redirect()->route('displayBook');

     }
      // category Controller
      function editCategory(Request $request,$id){
 
        return view('book.inputCategory')->with([
            'id' => $id
        ]);
     }
    function insertcategory(Request $request){
        $category = $request->category;
        $categoryList=DB::table('category')->get();
        $isCheck=false;
        foreach ($categoryList as $value) {
            if ($value->id==$request->id) {
                # code...
                DB::table('category')
                ->where('id', $value->id)
                ->update(['category' => $category]);
                $isCheck=true;

            }
        }
       if (!$isCheck) {
           # code...
           DB::table('category')->insert([
            'category' => $category,
            
        ]);
       }
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
     function deletecategory($id){
          DB::table('category')->where('id',$id)->delete();
          return redirect()->route('displayCategory');

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
