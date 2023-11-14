<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    public function login() {
        return view('admin.login');
    }
    
    public function dashboard() {
        $content = Content::all();
        return view('admin.dashboard', compact(['content']));
    }

    // public function search(Request $request) {
    //     if($request->search) {
    //         $searchContent = Content::where('nama_prov', 'LIKE', '%', $request->search.'%')->latest()->paginate(15);
    //         return view('admin.dashboard', compact('searchContent'));
    //     } else {
    //         return redirect()->back()->with('message', 'Empty Search');
    //     }
    // }
    public function search(Request $request) {
        if($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('content')
                    ->where('nama_prov', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();
            } else {
                $data = DB::table('content')
                    ->orderBy('id', 'desc')
                    ->get();
            }

            $total_row = $data->count();
            if($total_row > 0) {
                foreach($data as $row) {
                    $output = '
                    <tr>
                        <td>' .$row->nama_prov . '</td>
                        <td>' .$row->created_at . '</td>
                    </tr>
                    ';
                }
            } else {
                $output = 
                '<tr>
                    <td align="center">No Data Found</td>
                </tr>';
            }
        }
        
    }

    public function read($id) {
        $content   = Content::whereId($id)->first();
        return view('admin.read')->with('content', $content);
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
			'pict_sejarah' => 'required|image|mimes:jpeg,png,jpg',
            'pict_baju_adat' => 'required|file|image|mimes:jpeg,png,jpg',
            'pict_rumah_adat' => 'required|file|image|mimes:jpeg,png,jpg',
            'pict_lagu_daerah' => 'required|file|image|mimes:jpeg,png,jpg',
            'pict_senjata' => 'required|file|image|mimes:jpeg,png,jpg',
		]);
        
        $pictSejarah = $request->file('pict_sejarah');
        $fileNameSejarah = $request->nama_prov . '-sejarah' . '.' . $pictSejarah->extension();
        $pictSejarah->move(public_path('assets/img'), $fileNameSejarah);

        $pictBajuAdat = $request->file('pict_baju_adat');
        $fileNameBajuAdat = $request->nama_prov . '-bajuadat' . '.' . $pictBajuAdat->extension();
        $pictBajuAdat->move(public_path('assets/img'), $fileNameBajuAdat);

        $pictRumahAdat = $request->file('pict_rumah_adat');
        $fileNameRumahAdat = $request->nama_prov . '-rumahadat' . '.' . $pictRumahAdat->extension();
        $pictRumahAdat->move(public_path('assets/img'), $fileNameRumahAdat);

        $pictLaguDaerah = $request->file('pict_lagu_daerah');
        $fileNameLaguDaerah = $request->nama_prov . '-lagudaerah' . '.' . $pictLaguDaerah->extension();
        $pictLaguDaerah->move(public_path('assets/img'), $fileNameLaguDaerah);

        $pictSenjata = $request->file('pict_senjata');
        $fileNameSenjata = $request->nama_prov . '-senjata' . '.' . $pictSenjata->extension();
        $pictSenjata->move(public_path('assets/img'), $fileNameSenjata);

        try {
            Content::create([
                'nama_prov'         =>$request->nama_prov,
                'sejarah'           =>$request->sejarah,
                'baju_adat'         =>$request->baju_adat,
                'rumah_adat'        =>$request->rumah_adat,
                'lagu_daerah'       =>$request->lagu_daerah,
                'senjata'           =>$request->senjata,
                'pict_sejarah'      =>$fileNameSejarah,
                'pict_baju_adat'    =>$fileNameBajuAdat,
                'pict_rumah_adat'   =>$fileNameRumahAdat,
                'pict_lagu_daerah'  =>$fileNameLaguDaerah,
                'pict_senjata'      =>$fileNameSenjata
            ]);
            return redirect()->route('admin.dashboard')->with('message', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('admin.dashboard', 'Data gagal ditambahkan');
        }
    }

    public function delete($id) {
        $content = Content::where('id', $id)->delete();
        // kurang hapus file di direktori lokal
        return redirect()->route('admin.dashboard');   
    }

    public function edit($id) {
        $content   = Content::whereId($id)->first();
        return view('admin.edit')->with('content', $content);
        // $data['content'] = Content::where('id', $id)->first();
        // return view('admin.edit', $data);
    }

    public function update(Request $request, Content $content) {
        //validate form
        $this->validate($request, [
            'nama_prov' => 'required',
            'sejarah' => 'required',
            'baju_adat' => 'required',
            'rumah_adat' => 'required',
            'lagu_daerah' => 'required',
            'senjata' => 'required',
			'pict_sejarah' => 'required|image|mimes:jpeg,png,jpg',
            'pict_baju_adat' => 'required|file|image|mimes:jpeg,png,jpg',
            'pict_rumah_adat' => 'required|file|image|mimes:jpeg,png,jpg',
            'pict_lagu_daerah' => 'required|file|image|mimes:jpeg,png,jpg',
            'pict_senjata' => 'required|file|image|mimes:jpeg,png,jpg',
		]);

        Storage::delete('public/assets/img/'.$content->pict_sejarah);
        Storage::delete('public/assets/img/'.$content->pict_baju_adat);
        Storage::delete('public/assets/img/'.$content->pict_rumah_adat);
        Storage::delete('public/assets/img/'.$content->pict_lagu_daerah);
        Storage::delete('public/assets/img/'.$content->pict_senjata);

        $pictSejarah = $request->file('pict_sejarah');        
        $fileNameSejarah = $request->nama_prov . '-sejarah' . '.' . $pictSejarah->extension();
        $pictSejarah->move(public_path('assets/img'), $fileNameSejarah);

        $pictBajuAdat = $request->file('pict_baju_adat');
        $fileNameBajuAdat = $request->nama_prov . '-bajuadat' . '.' . $pictBajuAdat->extension();
        $pictBajuAdat->move(public_path('assets/img'), $fileNameBajuAdat);

        $pictRumahAdat = $request->file('pict_rumah_adat');
        $fileNameRumahAdat = $request->nama_prov . '-rumahadat' . '.' . $pictRumahAdat->extension();
        $pictRumahAdat->move(public_path('assets/img'), $fileNameRumahAdat);

        $pictLaguDaerah = $request->file('pict_lagu_daerah');
        $fileNameLaguDaerah = $request->nama_prov . '-lagudaerah' . '.' . $pictLaguDaerah->extension();
        $pictLaguDaerah->move(public_path('assets/img'), $fileNameLaguDaerah);

        $pictSenjata = $request->file('pict_senjata');
        $fileNameSenjata = $request->nama_prov . '-senjata' . '.' . $pictSenjata->extension();
        $pictSenjata->move(public_path('assets/img'), $fileNameSenjata);

        try {
            $content->update([
                'nama_prov'         =>$request->nama_prov,
                'sejarah'           =>$request->sejarah,
                'baju_adat'         =>$request->baju_adat,
                'rumah_adat'        =>$request->rumah_adat,
                'lagu_daerah'       =>$request->lagu_daerah,
                'senjata'           =>$request->senjata,
                'pict_sejarah'      =>$fileNameSejarah,
                'pict_baju_adat'    =>$fileNameBajuAdat,
                'pict_rumah_adat'   =>$fileNameRumahAdat,
                'pict_lagu_daerah'  =>$fileNameLaguDaerah,
                'pict_senjata'      =>$fileNameSenjata
            ]);
            return redirect()->route('admin.dashboard')->with('message', 'Data berhasil diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('admin.dashboard', 'Data gagal ditambahkan');
        }
        // $content->update([
        //     'nama_prov'         =>$request->nama_prov,
        //     'sejarah'           =>$request->sejarah,
        //     'baju_adat'         =>$request->baju_adat,
        //     'rumah_adat'        =>$request->rumah_adat,
        //     'lagu_daerah'       =>$request->lagu_daerah,
        //     'senjata'           =>$request->senjata,
        //     'pict_sejarah'      =>$fileNameSejarah,
        //     'pict_baju_adat'    =>$fileNameBajuAdat,
        //     'pict_rumah_adat'   =>$fileNameRumahAdat,
        //     'pict_lagu_daerah'  =>$fileNameLaguDaerah,
        //     'pict_senjata'      =>$fileNameSenjata
        // ]);
        // return redirect()->route('admin.dashboard')->with('message', 'Data berhasil diupdate');

        // try {

        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('admin.dashboard', 'Data gagal ditambahkan');
        // }
    }
}
