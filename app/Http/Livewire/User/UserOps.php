<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserOps extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email|max:50',
        'password' => 'required|string|min:8|max:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function save()
    {
        $this->validate();
        $success = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        if ($success){
            return $this->redirect('/');
        }
    }

    public function render()
    {
        return view('livewire.user.form')
            ->layout('layouts.app', ['title' => 'Create User']);
    }
}
