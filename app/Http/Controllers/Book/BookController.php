<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Book;
use App\Story;
use App\Storyerror;
use Auth;
use App\Http\Resources\BookResource;
class BookController extends Controller
{

    public function addstory (Request $request) {

        $body = $request->all();
        $bookrequst = $body['book'];
        $storys = $bookrequst['stories'];
       // $errorstory = array();
    //     $bookerror = array("fgfgd");
    //     $books = new Book;
    //     $storyserror = new Story;
    //     $errors = collect([]);
    //     $bookserror = collect([]);
    //     foreach($storys as $key=>$value) {
    //         if ( $storys[$key]['body']==null) {
    //             $storyserror->body='mustnot noll';
    //             $errors->push($storyserror);
    //         } 
    //     }
    //     $books->stories =$errors;
    //     $errors->push($book);
    //   //   $errors->push($storyserror);
    //    // $bodyObj = array_merge($book, $errors);
    //     return response()
    //     ->json([ 'errors' => $errors ])
    //     ->setStatusCode(400);
      //  $bodyObj = array_merge($book, $storys);
        // $rules = [
        // 'title' => 'required',
        // 'body' => 'required',
        //     'storys.*.title' => 'required',
        //     'storys.*.body' => 'required',
        // ];
        $rules = [
            'title' => 'required',
            'body' => 'required',
           
            ];
            $rulesstory = [
                'title' => 'required',
                'body' => 'required',
                  
                ];
                try {
              //  $validator = Validator::make($book, $rules);
               
                $errors = collect([]);
                $i = 0;
                foreach( $storys as $key=>$value) {
                    $errorstorys = new Storyerror;
                   
                //    if($i==2){
                //     $index = $storys[$i];
                //     return response()
                //     ->json([ 'book' => $index])
                //     ->setStatusCode(400);
                //    }
                            $validators =  Validator::make($storys[$i], $rulesstory);
                           if ($validators->fails()) {
                            $errorstorys->id=$i;
                            $errorstorys->body= $validators->errors()->messages();
                            $errors->push($errorstorys);
                           } 
                           $i++;  
                        }

          //  $validators = Validator::make($storys, $rulesstory);
           // $bodyObjv = array_merge($validator, $validators);
            if ($validators->fails()) {
                return response()
                    ->json([ "storis"=>$errors ])
                    ->setStatusCode(400);
            }
        }catch(Exception $e) {
            return response()
            ->json( 'Message: ' .$e->getMessage())
            ->setStatusCode(400);
                echo 'Message: ' .$e->getMessage();
              }
        $book = new Book;
        $book->user_id = $request->user()->id;
        $book->title = $bookrequst['title'];
        $book->body = $bookrequst['body'];
      //  $book->stories=$bookrequst['stories'];
        
        $book->save();
        $green_foods = Book::where('user_id',  $request->user()->id)->get();
        $i = 0;
        foreach( $storys as $key=>$value) {
            $story = new Story;
            $story->title=$storys[$i]['title'];
            $story->body=$storys[$i]['body'];
            $story->book_id=$book->id;
            $story->save();
            $i++; 
        }
//return response($green_foods,200);
        $response =new BookResource($book);
        return response($response, 200);
    }
    public function mystories (Request $request) {
        $green_foods = Book::with(['stories'])->where('user_id',Auth::user()->id)->get();
     //   $response =new BookResource($green_foods);
        return response($green_foods, 200);
    }
    public function stories (Request $request) {
        $green_foods = Book::with(['stories'])->get();
     //   $response =new BookResource($green_foods);
        return response($green_foods, 200);
    }
    //
}
