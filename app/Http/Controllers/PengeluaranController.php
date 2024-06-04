<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{
    public function index(){
        $pengeluaran = Pengeluaran::orderByDesc('date')->get();
        return view('pengeluaran.index',compact('pengeluaran'));
    }

    public function create(){
        return view('pengeluaran.create');
    }

	public function store(Request $request)
    {	
		try {
            Pengeluaran::create([
                'amount' => $request->harga,
                'description' => $request->deskripsi,
                'category' => $request->kategori,
                'date' => $request->date,
            ]);
            \Session::flash('success.message', 'Success to Add');
            return redirect('/pengeluaran');
		} catch(\Exception $e) {
        	\Session::flash('error.message', 'Failed to Add');
            return redirect('/pengeluaran');
        }
    }	

    public function delete($id)
	{
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->delete();
    
        \Session::flash('success.message', trans("Success To Delete"));
        return redirect()->back();
    }
}
