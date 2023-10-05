<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $identifiant;
    public $password;
    public $error=false;
    public $identifiantMode=true;

    protected $rules=[
        "identifiant"=>"required|min:11|max:11",
        "email"=>"required|email",
        "password"=>"required|min:4",
    ];

    protected $messages=[
        // "password.required"=>"Le champ de comfirmation est obligatoire",
        "identifiant.min"=>"L'identifiant doit etre de 11 chiffres",
        "identifiant.max"=>"L'identifiant doit etre de 11 chiffres",
    ];

    public function updated($propertedNane){
        return $this->validateOnly($propertedNane);
    }

    public function render()
    {
        return view('livewire.login');
    }

    public function changeMode()
    {
        $this->identifiantMode=!$this->identifiantMode;
    }
    public function login()
    {
        $validated = $this->validate([
            'email' => 'required|min:3|email',
            'password' => 'required|min:4',
        ]);
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('/home');
            // return view('index');
        } else {
            $this->error=true;
        }
        // $this->dispatchBrowserEvent("showModalChambre");

    }
    public function loginIdentifiant()
    {
        $validated = $this->validate([
            'identifiant' => 'required|min:11|max:11',
            'password' => 'required|min:4',
        ]);
        if (Auth::attempt(['identifiant' => $this->identifiant, 'password' => $this->password])) {
            return redirect()->to('/user');
            // return view('home');
        } else {
            $this->error=true;
        }
        //  $this->dispatchBrowserEvent("showModalChambre");

    }

}
