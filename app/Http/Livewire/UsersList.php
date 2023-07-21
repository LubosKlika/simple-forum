<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class UsersList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $users;
    protected $listeners = ['userDeleted' => '$refresh'];





    public function deleteUser($id){

        $user = User::find($id);
        //Pokud je uživatel přihlášený -> při smazání bude odhlášen a přesměrován
        if (auth()->check() && auth()->user()->id == $user->id) {
        $user->delete();
        auth()->logout();
        return redirect('/');

        }else{

            $user->delete();

            //Vyvolá listener a refreshne componentu -> tabulku v šabloně
            $this->emit('userDeleted');
        }

    }
    public function render(){
        
        $this->users = User::orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.users-list', ['users' => $this->users])->extends('layout');
    }
}
