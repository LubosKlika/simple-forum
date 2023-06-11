<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;

class MainController extends Controller
{


 
    public function logout (Request $request){

  
        auth()->logout();
        $request->session()->invalidate();
        

        $request->session()->regenerateToken();


        return redirect('/')->with('message', 'odhlášen');
    }

    public function showMain (){

        $questions = Question::with('user')->orderBy('created_at', 'desc')->paginate(5);

      
        return view('main.mainPage', ['questions' => $questions]);


    }
    public function showQuestion (Question $questions){

      

        $questions->load('user');
        return view('main.question',['question' => $questions]);


    }


 
    public function showUser (User $user){

     


        return view('main.user-profile',['user' => $user]);


    }




 


}
