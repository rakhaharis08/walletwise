<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Tagihan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $startofmonth = Carbon::now()->startOfMonth()->format('d M, Y');
        $endofmonth = Carbon::now()->endOfMonth()->format('d M, Y');
    
        $pemasukan = Pemasukan::whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])->sum('amount');
        $pengeluaran = Pengeluaran::whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])->sum('amount');
        $tagihan = Tagihan::sum('amount');
        $dompet = $pemasukan - $pengeluaran;
        $top_spending = Pengeluaran::whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])
        ->orderBy('amount', 'desc')
        ->limit(5)
        ->get();
        $top_income = Pemasukan::whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])
        ->orderBy('amount', 'desc')
        ->limit(5)
        ->get();
        $recent_purchases = Pengeluaran::whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])
        ->orderBy('date', 'desc')
        ->limit(5)
        ->get();

        $totalAmount = Pengeluaran::whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])->sum('amount');
        
        $operationalAmount = Pengeluaran::where('category', 'Operasional')
            ->whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])
            ->sum('amount');        
        if ($totalAmount == 0) {
            $percentage_operasional = 0;
        } else {
            $percentage_operasional = ($operationalAmount / $totalAmount) * 100;
        }

    
        return view('index', compact('pemasukan','pengeluaran','tagihan','dompet','top_spending','top_income','recent_purchases','startofmonth','endofmonth','percentage_operasional'));
    }

    public function index_filter(Request $request)
    {
        $filterDate = $request->input('filter');
        list($startDate, $endDate) = explode(' to ', $filterDate);
    
        $tanggalAwal = Carbon::parse($startDate)->format('Y-m-d 00:00:00');
        $tanggalAkhir = Carbon::parse($endDate)->format('Y-m-d 23:59:59');

        $startofmonth = Carbon::parse($startDate)->format('d M, Y');
        $endofmonth = Carbon::parse($endDate)->format('d M, Y');
    
        $pemasukan = Pemasukan::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->sum('amount');
        $pengeluaran = Pengeluaran::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->sum('amount');
        $tagihan = Tagihan::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->sum('amount');
        $dompet = $pemasukan - $pengeluaran;
        $top_spending = Pengeluaran::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->orderBy('amount', 'desc')->limit(5)->get();
        $top_income = Pemasukan::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->orderBy('amount', 'desc')->limit(5)->get();
        $recent_purchases = Pengeluaran::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->orderBy('date', 'desc')->limit(5)->get();
    
        return view('index', compact('pemasukan', 'pengeluaran', 'tagihan', 'dompet', 'top_spending', 'top_income', 'recent_purchases','startofmonth','endofmonth'));
    }
}
