<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{

    #[Title('Register Page')]

    #[Validate('required|min:2')]
    public $name;
    
    #[Validate('required|email|unique:users')]
    public $email;
    
    #[Validate('required|min:5')]
    public $password;

    public function register()
    {
        
        $validated = $this->validate();
        
        try {

            User::create($validated);
            session()->flash('success', 'User berhasil di tambahkan..');
            $this->reset();

        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
     
    }


    public function render()
    {
        return view('livewire.register');
    }
}
