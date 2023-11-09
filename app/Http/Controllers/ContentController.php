<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    //
    public function dashboard() {
        $content = Content::all();
        // dd($rekening);
        return view('admin\dashboard', compact(['content']));
    }
}
