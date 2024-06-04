<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tagihan;
use App\Models\Pengeluaran;
use Carbon\Carbon;

class TagihanController extends Controller
{
    public function index(){
        $tagihan = Tagihan::all();
        return view('tagihan.index',compact('tagihan'));
    }

    public function create(){
        return view('tagihan.create');
    }

	public function store(Request $request)
    {	
		try {
            Tagihan::create([
                'amount' => $request->harga,
                'description' => $request->deskripsi,
                'category' => $request->kategori,
                'date' => $request->date,
                'status' => 0,
            ]);
            \Session::flash('success.message', 'Success to Add');
            return redirect('/tagihan');
		} catch(\Exception $e) {
        	\Session::flash('error.message', 'Failed to Add');
            return redirect('/tagihan');
        }
    }	

    public function delete($id)
	{
        $tagihan = Tagihan::find($id);
        $tagihan->delete();
    
        \Session::flash('success.message', trans("Success To Delete"));
        return redirect()->back();
    }   
    public function pay($id)
	{
        $tagihan = Tagihan::find($id);
        $tagihan->status = 1;
        $tagihan->save();
        
        Pengeluaran::create([
            'amount' => $tagihan->amount,
            'description' => "Bayar Tagihan ".$tagihan->description,
            'category' => $tagihan->category,
            'date' => Carbon::now(),
        ]);
        return redirect()->back();
    }
}
