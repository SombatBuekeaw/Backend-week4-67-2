<?php

namespace App\Http\Controllers;

abstract class Controller

{
    public function show()
    {
        return redirect()->to('home/profile/user');
    }
    public function user(){
        return to_route('user');
    }
    
}
