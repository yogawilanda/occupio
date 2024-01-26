<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;
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
            'email' => fake()
                ->unique()
                ->safeEmail(),
            'password' => 'password1234',
        ]);
    }

    public function save()
    {
        dump('Button Clicked');
    }

    #[Validate(['required', 'min:3'])]
    public $name;

    #[Validate(['required', 'email:rfc,dns', 'unique:users'])]
    public $email;

    #[Validate(['required', 'min:8'])]
    public $password;

    /**
     * The function creates a new user using form data, validates the input, and stores the user in the
     * database.
     */
    public function createNewUserUsingForm()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password->bcrypt(),
        ]);
    }
}
