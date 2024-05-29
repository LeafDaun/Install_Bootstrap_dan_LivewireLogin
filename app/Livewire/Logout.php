<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $this->redirect('/', navigate:true);
    }


    public function render()
    {
        return view('livewire.logout');
    }
}
