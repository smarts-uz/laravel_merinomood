<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Casts\SeparateDate;
use Carbon\CarbonPeriod;
use Livewire\Component;

class EditProfile extends Component
{
    public $user;
    public $birthday;

    protected $casts = [
        'birthday' => SeparateDate::class
    ];

    public function mount()
    {
        $this->user = auth()->user()->toArray();
        $this->birthday = auth()->user()->birthday;
    }

    public function edit()
    {
        $validated = $this->validate([
            'user.name' => 'required',
            'user.email' => 'required|email|unique:users,email,' . auth()->id(),
            'user.password' => 'nullable|confirmed|min:6',
        ], [
            'user.name.required' => 'The name field is required.',
            'user.email.required' => 'The email field is required.',
            'user.email.unique' => 'The email has already been taken.'
        ]);

        if (array_key_exists('password', $user = $validated['user'])) {
            $user['password'] = bcrypt($user['password']);
        }

        auth()->user()->update(array_merge($user, [
            'birthday' => $this->birthday
        ]));

        return redirect()->to('/account');
    }

    public function getMonthsProperty()
    {
        $months = [];

        $period = CarbonPeriod::create(now()->startOfYear(), '1 month', now()->endOfYear());

        foreach ($period as $date) {
            $months[$date->format('n')] = $date->format('F');
        }

        return $months;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
