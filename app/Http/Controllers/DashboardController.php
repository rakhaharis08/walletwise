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
        if ($pemasukan > 0) {
            $defisit = ($pengeluaran / $pemasukan) * 100;
        } else {
            $defisit = 0;
        }

        $tagihan = Tagihan::where('status', 0)->sum('amount');
        
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

    
        $belanjaAmount = Pengeluaran::where('category', 'Belanja')
            ->whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])
            ->sum('amount');        
        if ($totalAmount == 0) {
            $percentage_belanja = 0;
        } else {
            $percentage_belanja = ($belanjaAmount / $totalAmount) * 100;
        }

        
        $hiburanAmount = Pengeluaran::where('category', 'Hiburan')
            ->whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])
            ->sum('amount');        
        if ($totalAmount == 0) {
            $percentage_hiburan = 0;
        } else {
            $percentage_hiburan = ($hiburanAmount / $totalAmount) * 100;
        }
        
        $lainAmount = Pengeluaran::where('category', 'lain-lain ')
            ->whereBetween('date', [Carbon::now()->firstOfMonth(), Carbon::now()])
            ->sum('amount');        
        if ($totalAmount == 0) {
            $percentage_lain = 0;
        } else {
            $percentage_lain = ($lainAmount / $totalAmount) * 100;
        }
    
        return view('index', compact('pemasukan','pengeluaran','defisit','tagihan','dompet','top_spending','top_income','recent_purchases','startofmonth','endofmonth','percentage_operasional','percentage_belanja','percentage_hiburan','percentage_lain'));
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

        if ($pemasukan > 0) {
            $defisit = ($pengeluaran / $pemasukan) * 100;
        } else {
            $defisit = 0;
        }

        $tagihan = Tagihan::sum('amount');
        $defisit = number_format($defisit, 2, '.', ',');
        $dompet = $pemasukan - $pengeluaran;
        $top_spending = Pengeluaran::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->orderBy('amount', 'desc')->limit(5)->get();
        $top_income = Pemasukan::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->orderBy('amount', 'desc')->limit(5)->get();
        $recent_purchases = Pengeluaran::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->orderBy('date', 'desc')->limit(5)->get();
        
        $totalAmount = Pengeluaran::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->sum('amount');
        
        $operationalAmount = Pengeluaran::where('category', 'Operasional')
            ->whereBetween('date', [$tanggalAwal, $tanggalAkhir])
            ->sum('amount');        
        if ($totalAmount == 0) {
            $percentage_operasional = 0;
        } else {
            $percentage_operasional = ($operationalAmount / $totalAmount) * 100;
        }

    
        $belanjaAmount = Pengeluaran::where('category', 'Belanja')
        ->whereBetween('date', [$tanggalAwal, $tanggalAkhir])
            ->sum('amount');        
        if ($totalAmount == 0) {
            $percentage_belanja = 0;
        } else {
            $percentage_belanja = ($belanjaAmount / $totalAmount) * 100;
        }

        
        $hiburanAmount = Pengeluaran::where('category', 'Hiburan')
        ->whereBetween('date', [$tanggalAwal, $tanggalAkhir])
            ->sum('amount');        
        if ($totalAmount == 0) {
            $percentage_hiburan = 0;
        } else {
            $percentage_hiburan = ($hiburanAmount / $totalAmount) * 100;
        }
        
        $lainAmount = Pengeluaran::where('category', 'lain-lain ')
        ->whereBetween('date', [$tanggalAwal, $tanggalAkhir])
            ->sum('amount');        
        if ($totalAmount == 0) {
            $percentage_lain = 0;
        } else {
            $percentage_lain = ($lainAmount / $totalAmount) * 100;
        }

        return view('index', compact('pemasukan', 'pengeluaran','defisit', 'tagihan', 'dompet', 'top_spending', 'top_income', 'recent_purchases','startofmonth','endofmonth','percentage_operasional','percentage_belanja','percentage_hiburan','percentage_lain'));
    }
}
