<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class TLSController extends Controller
{

    public function index(Request $request)
    {
        $role = Auth::user()->role;
        return view('content.kronologi', [
            'role' => $role,
        ]);
    }
}
