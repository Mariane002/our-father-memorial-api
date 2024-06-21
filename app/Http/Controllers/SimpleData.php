<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SimpleData extends Controller
{
    public function index()
    {
        $fakeData = [
            'id'=> 1,
            'name' => 'Test web',
            'contact' => '09231023'
        ];
        
        return response()-> json($fakeData);
    }
}