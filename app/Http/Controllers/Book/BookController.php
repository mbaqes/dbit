<?php

namespace App\Http\Controllers\Book;

use App\Events\NewBook;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Model\Book;
use App\Model\Story;
use App\Model\Storyerror;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\BookResource;
use Exception;

class BookController extends Controller
{

    public function addstory (Request $request) {

        $body = $request->all();
        $bookrequst = $body['book'];
        $storys = $bookrequst['stories'];
     
        $rules = [
            'title' => 'required',
            'body' => 'required',
           
            ];
            $rulesstory = [
                'title' => 'required',
                'body' => 'required',
                  
                ];
                try {
           
                $errors = collect([]);
                $i = 0;
                foreach( $storys as $key=>$value) {
                    $errorstorys = new Storyerror;
                            $validators =  Validator::make($storys[$i], $rulesstory);
                           if ($validators->fails()) {
                            $errorstorys->id=$i;
                            $errorstorys->body= $validators->errors()->messages();
                            $errors->push($errorstorys);
                           } 
                           $i++;  
                        }

         
            if ($validators->fails()) {
                return response()
                    ->json([ "storis"=>$errors ])
                    ->setStatusCode(400);
            }
        }catch( Exception $e) {
            return response()
            ->json( 'Message: ' .$e->getMessage())
            ->setStatusCode(400);
                echo 'Message: ' .$e->getMessage();
              }
        $book = new Book;
        $book->user_id = $request->user()->id;
        $book->title = $bookrequst['title'];
        $book->body = $bookrequst['body'];
    
        $book->save();
        $result = Book::where('user_id',  $request->user()->id)->get();
        $i = 0;
        foreach( $storys as $key=>$value) {
            $story = new Story;
            $story->title=$storys[$i]['title'];
            $story->body=$storys[$i]['body'];
            $story->book_id=$book->id;
            $story->save();
            $i++; 
        }
 
        $response =new BookResource($book);
        return response($response, 200);
    }
    public function mystories (Request $request) {
        $result = Book::with(['stories'])->where('user_id',Auth::user()->id)->get();
        event(new \App\Events\NewBook(Auth::user()->id));
        return response($result, 200);
    }
    public function stories (Request $request) {
        $result = Book::with(['stories'])->get();
        event(new \App\Events\NewBook($request->message));
        
        return response($result, 200);
    }
    //
}
