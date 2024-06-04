<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;

class PemasukanController extends Controller
{
    public function index(){
        $pemasukan = Pemasukan::all();
        return view('pemasukan.index',compact('pemasukan'));
    }

    public function create(){
        return view('pemasukan.create');
    }

	public function store(Request $request)
    {	
		try {
            Pemasukan::create([
                'amount' => $request->harga,
                'description' => $request->deskripsi,
                'category' => $request->kategori,
                'date' => $request->date,
            ]);
            \Session::flash('success.message', 'Success to Add');
            return redirect('/pemasukkan');
		} catch(\Exception $e) {
        	\Session::flash('error.message', 'Failed to Add');
            return redirect('/pemasukan');
        }
    }	
}