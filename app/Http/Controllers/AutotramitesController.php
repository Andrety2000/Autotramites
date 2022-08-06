<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AutotramitesController extends Controller
{
    public function __invoke()
    {
        return view('autotramites');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
            {
                return view('autotramites');
            }
    }
}
