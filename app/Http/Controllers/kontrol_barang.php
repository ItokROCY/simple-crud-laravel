<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class kontrol_barang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $data = Barang::paginate(10);
        // dd($data);
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang;
        
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga = $request->harga ;
        $barang->save();
        // dd($barang);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Barang::findOrFail($id);
        return view('read', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::Where('id',$id)->first();
        // dd($data);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        // dd($barang);
            $barang->jumlah_barang = $request->jumlah_barang;
            $barang->harga = $request->harga;
            $barang->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::where('id',$id)->first();
        $data->delete();
        return redirect('/');
    }





    public function search(Request $request){
        
        $keyword = Barang::query();

        $searchKeyword = $request->input('search');

        if($request->has('checkBarang') && !empty($request->input('searchBarang'))){
            $keyword->where('nama_barang', 'LIKE', '%' . $request->input('searchBarang'). '%');
        }

        if($request->has('checkHarga') && !empty($request->input('searchHarga'))){
            $keyword->where('harga', 'LIKE', '%' . $request->input('searchHarga'). '%');
        }
        
        
        $data = $keyword->paginate();

        // dd($data);
        return view('index', compact('data'));
    }






    public function cariDrop(Request $request)
    {
        $keyword = Barang::query();
        $hasilDrop = $request->input('jenis');
        

        if ($hasilDrop == 'barang') {
            $keyword->where('nama_barang', 'LIKE', '%' .$request->input('hasilDrop'). '%');
        } elseif ($hasilDrop == 'harga') {
            $keyword->where('harga', 'LIKE', '%' .$request->input('hasilDrop'). '%');
        } 
        
        $data = $keyword->paginate();
        // dd($data);
        return view('index', compact('data'));
    }





    public function chart()
    {
        $data = Barang::all();

        $labels = $data-> nama_barang();
        $statistik = $data-> jumlah_barang();
        dd($data);
        return view('chart', compact(['labels','statistik']));
    }
    
}
