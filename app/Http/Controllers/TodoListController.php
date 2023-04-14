<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;  this is used for api calls to third party
use App\Models\Todolist;




 
class TodoListController extends Controller
{
    public function getTodos(){
        $dbdatas = Todolist::all();
        return view('home',[ "dbdatas"=>$dbdatas]);
       
    }
    
    public function postTodo(Request $req){

        $dbdatas = Todolist::all();
        if(count($dbdatas) >= 10){

            return redirect('/');
        }else{
            $newTodo = new Todolist;
            $newTodo->todo= $req->todo;
            $newTodo->save();
            return redirect('/');
        } 
    }

    public function editTodoTextArea($id){
        if($id){
            $matchedTodo= Todolist::find($id);
            return view('edit-page',['matchedTodo'=>$matchedTodo]);
        }else{
            return redirect('/');
        }
       
    }
    public function editTodo(Request $req){
        $updateTodo= Todolist::find($req->id);
        $updateTodo->todo= $req->edited;
        $updateTodo->save();
        return redirect('/');
    }

    public function deleteTodo($id){
        $foundTodo=Todolist::find($id);
        $foundTodo->delete();
        return redirect('/');
    }

    
}
