<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(): Factory|View
     {
        $name = "James Maina";
        return view('frontend.contacts', compact('name'));

    }
}

