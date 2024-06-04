<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Tagihan;

class DashboardController extends Controller
{
    public function index(){
        $pemasukan = Pemasukan::sum('amount');
        $pengeluaran = Pengeluaran::sum('amount');
        $tagihan = Tagihan::sum('amount');
        $dompet = $pemasukan - $pengeluaran;
        $top_spending = Pengeluaran::orderBy('amount', 'desc')->limit(5)->get();
        $top_income = Pemasukan::orderBy('amount', 'desc')->limit(5)->get();
        $recent_purchases = Pengeluaran::orderBy('date', 'desc')->limit(5)->get();
        return view('index', compact('pemasukan','pengeluaran','tagihan','dompet','top_spending','top_income','recent_purchases'));
    }
}
