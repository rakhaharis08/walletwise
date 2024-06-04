<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;

class PemasukanController extends Controller
{
    public function index(){
        $pemasukan = Pemasukan::orderByDesc('date')->get();
        foreach ($pemasukan as $row) {
            $id = $row->id;
        }
        return view('pemasukan.index',compact('pemasukan','id'));
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
    
    public function delete($id)
	{
        $pemasukan = Pemasukan::find($id);
        $pemasukan->delete();
    
        \Session::flash('success.message', trans("Success To Delete"));
        return redirect()->back();
    }
}
