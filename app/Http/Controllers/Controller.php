<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

abstract class Controller
{
    public function register(RegisterRequest $request) {
        $data = $request->validated();
    }
}
