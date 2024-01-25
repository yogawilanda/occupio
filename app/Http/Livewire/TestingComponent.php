<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule; 



class TestingComponent extends Component
{
    // public $name = 'testing';
    public array $arrays = ['testing', 'array', 'livewire'];
    public $title;

    // LiveWire Rules

   
    public function render()
    {
        $user = User::all();
        // Basic example : Ga ada parameter yang dikirim.
        // return view('livewire.testing-component');

        // Mengirim parameter user ke view tapi dalam bentuk array.
        return view('livewire.testing-component')->with([
            'author' => Auth::user()->name,
            'user' => $user,
        ]);
    }

    function createNewUser()
    {
        // $user = new User();
        // $user->name = ;
        // $user->email = '';
        // $user->password = '';
        // $user->save();

        User::create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => "password1234",
        ]);
    }

    public function save()
    {
        dump("Button Clicked");
    }
    #[Rule('required|min:6')]
    public $name;
    public $email;
    public $password;

    /**
     * The function creates a new user using form data, validates the input, and stores the user in the
     * database.
     */
    public function createNewUserUsingForm()
    {
        $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:8',
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password->bcrypt(),
        ]);
    }
}
