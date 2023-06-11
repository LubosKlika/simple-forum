<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Login extends Component
{

    public $email;
    public $password;

    public function login(){

        $this->validate([
            
            'email' => 'required | email',
            'password' => 'required',


        ]);

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {

            $this->addError('email', trans('auth.failed'));

            return;
        }

       return redirect('/');

    }
    public function render()
    {
        return view('livewire.login')->extends('layout');
    }
}
