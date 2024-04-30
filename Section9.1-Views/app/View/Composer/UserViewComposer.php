<?php


namespace App\View\Composer;

use Illuminate\View\View;

class User{
    public $username;
    public $email;

    function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }
}

class UserViewComposer{
    public function compose(View $view){
        $view->with('user', new User('saba', 'saba27ge@gmail.com'));
    }
}
