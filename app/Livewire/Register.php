<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    // public $top="false";

    protected $rules=[
        "name"=>"required|string|min:3",
        "email"=>"required|email|unique:users",
        "password"=>"required|min:4|confirmed",
        "password_confirmation"=>"required|min:4",
    ];

    protected $messages=[
        "password.required"=>"Le champ de comfirmation est obligatoire",
        "password.min"=>"la comfirmation doit etre de 4 caracteres",
        "password_confirmation.required"=>"Le champ mot de passe est obligatoire",
        "password_confirmation.min"=>"le mot de passe doit etre de 4 caracteres",
    ];

    public function updated($propertedNane){
        return $this->validateOnly($propertedNane);
    }

    public function render()
    {
        return view('livewire.register');
    }

    public function submit(){
        $this->validate();

        User::create([
            "name"=>$this->name,
            "email"=>$this->email,
            // "isAdmin"=>$this->role,
            "password"=>Hash::make($this->password),
        ]);
        $this->reset("name","email","password");
    }
}
