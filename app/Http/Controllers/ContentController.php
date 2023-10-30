<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    //
    public function dashboard() {
        $content = Content::all();
        // dd($rekening);
        return view('admin.dashboard', compact(['content']));
    }
    public function create() {
        return view('admin.create');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'nama_prov' => 'required',
            'sejarah' => 'required',
            'baju_adat' => 'required',
            'rumah_adat' => 'required',
            'lagu_daerah' => 'required',
            'senjata' => 'required',
			'pict_sejarah' => 'required|file|image|mimes:jpeg,png,jpg|max:512',
            'pict_baju_adat' => 'required|file|image|mimes:jpeg,png,jpg|max:512',
            'pict_rumah_adat' => 'required|file|image|mimes:jpeg,png,jpg|max:512',
            'pict_lagu_daerah' => 'required|file|image|mimes:jpeg,png,jpg|max:512',
            'pict_senjata' => 'required|file|image|mimes:jpeg,png,jpg|max:512',
		]);

        // $pictSejarah = $request->file('pict_sejarah');
        // $->storeAs('public/assets/img', $pictSejarah->hashName());

        $pictSejarah = time().'.'.$request->pict_sejarah->extension();
        $uploadedImage = $request->pict_sejarah->move(public_path('assets/img'), $pictSejarah);
        $pictSejarahPath = 'assets/img' . $pictSejarah;

        // $pictBajuAdat = $request->file('pict_baju_adat');
        // $pictBajuAdat->storeAs('public/assets/img', $pictBajuAdat->hashName());

        // $pictRumahAdat = $request->file('pict_rumah_adat');
        // $pictRumahAdat->storeAs('public/assets/img', $pictRumahAdat->hashName());

        // $pictLaguDaerah = $request->file('pict_lagu_daerah');
        // $pictLaguDaerah->storeAs('public/assets/img', $pictLaguDaerah->hashName());

        // $pictSenjata = $request->file('pict_senjata');
        // $pictSenjata->storeAs('public/assets/img', $pictSenjata->hashName());
        
        try {
            Content::create([
                'nama_prov'         =>$request->nama_prov,
                'sejarah'           =>$request->sejarah,
                'baju_adat'         =>$request->baju_adat,
                'rumah_adat'        =>$request->rumah_adat,
                'lagu_daerah'       =>$request->lagu_daerah,
                'senjata'           =>$request->senjata,
                $product->image = $imagePath;
                // 'pict_sejarah'      =>$pictSejarah
                // 'pict_baju_adat'    =>$pictBajuAdat->hashName(),
                // 'pict_rumah_adat'   =>$pictRumahAdat->hashName(),
                // 'pict_lagu_daerah'  =>$pictLaguDaerah->hashName(),
                // 'pict_senjata'      =>$pictSenjata->hashName(),
            ]);
            return redirect()->route('admin.dashboard')->with('message', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('admin.dashboard', 'Data gagal ditambahkan');
        }

        // return redirect()->route('admin.dashboard')->with('message', 'Data berhasil ditambahkan');;
        // return redirect()
        //     ->back()
        //     ->with('success', 'Image successfully upload.');
    }
}
