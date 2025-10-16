<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(): Factory|View
     {
        $name = "James Maina";
    return view('frontend.contacts', data: compact('name'));
}
}
