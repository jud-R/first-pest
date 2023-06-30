<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        
        auth()->user()->books()->create(
            $request->only('title', 'description', 'price')
        );

        return response('Book created');
    }
}
