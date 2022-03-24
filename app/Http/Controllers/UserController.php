<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\User;

class UserController extends Controller
{
    public function deleteAccount(Request $request)
    {
        try {
        $user = User::where('id', $request['user'])->delete(); 
        } catch (ModelNotFoundException $exception) {
            return $exception->errorInfo;
        };
    }
}
