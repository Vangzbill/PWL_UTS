<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Illuminate\Support\Facades\Request::get('query') !== null){
            $query = \Illuminate\Support\Facades\Request::get('query');
            $buku = BukuModel::where('kode', 'LIKE', '%'.$query.'%')
                    ->orWhere('judul', 'LIKE', '%'.$query.'%')
                    ->orWhere('pengarang', 'LIKE', '%'.$query.'%')
                    ->orWhere('penerbit', 'LIKE', '%'.$query.'%')
                    ->orWhere('tahun', 'LIKE', '%'.$query.'%')
                    ->orWhere('jenis', 'LIKE', '%'.$query.'%')
                    ->paginate(5);
            $current_page = $buku->currentPage();
        } else {
            $buku = BukuModel::paginate(5);
            $current_page = $buku->currentPage();
        }
        
        return view('buku.buku')
            ->with('buku', $buku);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create_buku')
            ->with('url_form', url('/buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:10|unique:buku,kode',
            'judul' => 'required|string|max:100',
            'pengarang' => 'required|string|max:50',
            'penerbit' => 'required|string|max:50',
            'tahun' => 'required|string|max:5',
            'jenis' => 'required|in:Edukasi,Novel,Majalah,Kamus,Komik,Ensiklopedia,Biografi,Naskah',
        ]);

        BukuModel::create($request->all());
        return redirect('buku')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function show(BukuModel $bukuModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = BukuModel::find($id);
        return view('buku.create_buku')
            ->with('buku', $buku)
            ->with('url_form', url('/buku/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:10|unique:buku,kode,'.$id,
            'judul' => 'required|string|max:100',
            'pengarang' => 'required|string|max:50',
            'penerbit' => 'required|string|max:50',
            'tahun' => 'required|string|max:5',
            'jenis' => 'required|in:Edukasi,Novel,Majalah,Kamus,Komik,Ensiklopedia,Biografi,Naskah',
        ]);

        $data = BukuModel::where('id', $id)->update($request->except('_token', '_method'));
        return redirect('buku')
            ->with('success', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = BukuModel::find($id);
        $buku->delete();

        return response()->json(['status' => 'Buku Berhasil di hapus!']);
        // BukuModel::destroy($id);
        // return redirect('/buku')->with('success', 'Buku Berhasil Dihapus!');
    }


}
