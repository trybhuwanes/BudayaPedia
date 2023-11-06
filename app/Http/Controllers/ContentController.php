<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    //
    public function home() {
        return view('home');
    }
    public function detail($id) {
        $content   = Content::whereId($id)->first();
        return view('detail')->with('content', $content);
    }
    public function provinsi () {
        return view('prov');
    }
    
}
