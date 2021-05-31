<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\User;
use resources\views\livewire;

class Login extends Component
{   
    public $users, $name, $email, $password;

    public function login()
    {   
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                return redirect()-> to ('/users');
        }else{
                return redirect()-> to ('/users');               
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
