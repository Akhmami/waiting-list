<?php

namespace App\Livewire\Home;

use App\Models\Waiting;
use App\Rules\UnauthorizedEmailProviders;
use Livewire\Component;

class Index extends Component
{
    public $email;

    public function store()
    {
        $this->validate();

        Waiting::create([
            'email' => $this->email,
        ]);

        $this->reset('email');
        session()->flash('message', 'Added to waiting list successfully.');
    }

    public function rules()
    {
        return [
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', new UnauthorizedEmailProviders()]
        ];
    }

    public function render()
    {
        return view('livewire.home.index', [
            'waitingList' => Waiting::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
