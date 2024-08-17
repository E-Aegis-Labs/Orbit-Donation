<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class Profile extends Component
{
    public $email;
    public $timeJoined;
    public $username;
        /**
     * Create a new component instance.
     *
     * @param User $user
     */
    /**
     * Create a new component instance.
     */
    public function __construct($email, $timeJoined, $username)
    {
        $this->email = $email;
        $this->timeJoined = $timeJoined;
        $this->username = $username;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile', [
            'email' => $this->email,
            'timeJoined' => $this->timeJoined,
            'username' => $this->username,
        ]);
    }
}



