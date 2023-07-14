<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\chart;
use App\barangs;
use App\Models\Barang;

class chartJsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    //     $label = (DB::SELECT("SELECT nama_barang from Barangs"));
    //     $values = (DB::SELECT("SELECT jumlah_barang from Barangs"));
    //     // dd($label, $values);
    
    //     return view('element.chart', compact('label', 'values'));
    // }

    public function barChart()
    {
        {
            $barangs = Barang::all();
            $labels = $barangs->pluck('nama_barang');
            $data = $barangs->pluck('jumlah_barang');
    
            // dd($labels, $data);
            return view('element.chart', compact('labels', 'data'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function LineChart()
    {
        $data = Barang::selectRaw('DATE_FORMAT(tanggal, "%Y-%m-%d") as date, AVG(output) as avg_output')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        $label = $data->pluck('nama_barang');
        $value = $data->pluck('jumlah_barang');

        return view('element.chart', compact('label', 'value'));
    }
}
