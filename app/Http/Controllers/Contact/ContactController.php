<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
    *
    *contact page
    */
    public function index(){
            return view('contact.index');
    }
}
