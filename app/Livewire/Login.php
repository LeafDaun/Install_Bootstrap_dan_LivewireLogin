<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Title('Login Page')]

    public $email;
    public $password;

    public function login_masuk(Request $request)
    {

        // try {
        //     //code...
            $validated = $this->validate([
                'email' => "required|email",
                'password' => "required",
            ]);
    
            if(Auth::attempt($validated)){
                $request->session()->regenerate();
                return $this->redirect('/', navigate:true);
            }

            $this->addError('email','the password not match..');
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     session()->flash('error', $th->getMessage());
        //     return;
        // }


    }

   

    public function render()
    {
        return view('livewire.login');
    }
}
