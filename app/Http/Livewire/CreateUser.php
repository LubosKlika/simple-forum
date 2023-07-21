<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Hash;

class CreateUser extends Component
{

    public $name;
    public $email;
    public $password ;
    public $password_confirmation;

    public function createUser(){

        $this->validate([

            'name' => ['required', 'min:3','max:50'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),

            
          
          ]);
          //Nepřihlašovat pod účtem, pokud účet vytváří přihlášený uživatel
          if (!auth()->check()) {
            auth()->login($user);
            }

          return redirect()->route('user', ['user' => $user->id]);




        
    }
    
  


    public function render()
    {
        return view('livewire.create-user')->extends('layout');
    }
}
