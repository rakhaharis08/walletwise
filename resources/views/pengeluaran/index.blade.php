@extends('layouts.master')
@section('title')
    Data Pengeluaran
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">

@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Tables
        @endslot
        @slot('title')
            Grid Js
        @endslot
    @endcomponent
    @if(Session::has('success.message'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Success!',
                text: '{{ Session::get('
                success.message ') }}',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        });

    </script>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Pengeluaran</h4>
                    
                </div>

                <div class="card-body">
                        <a href="tambah-pengeluaran"><button type="button" class="btn btn-primary waves-effect waves-light">+ Data Pengeluaran</button></a><br><br>
                    <div id="table-gridjs"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('build/libs/gridjs/gridjs.umd.js') }}"></script>

    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script>
    let counter = 1;
    if (document.getElementById("table-gridjs"))
        new gridjs.Grid({
            columns: [{
                    name: 'ID',
                    width: '80px',
                    formatter: (function (cell) {
                        return gridjs.html('<span class="fw-semibold">' + cell + '</span>');
                    })
                },
                {
                    name: 'Deskripsi',
                    width: '250px',
                },
                {
                    name: 'Kategori',
                    width: '120px',
                },
                {
                    name: 'Jumlah',
                    width: '150px',
                },
                {
                    name: 'Tanggal',
                    width: '180px',
                },
                {
                    name: 'Actions',
                    width: '150px',
                    formatter: (function (cell) {
                        return gridjs.html("<a href='hapus-pengeluaran' class='text-reset text-decoration-underline'>" +
                            "Hapus" +
                            "</a>");
                    })
                },
            ],
            pagination: {
                limit: 5
            },
            sort: true,
            search: true,
            data: [
                @foreach($pengeluaran as $row)
                [counter++,"{{$row->description}}","{{$row->category}}","Rp. {{number_format($row->amount)}}","{{$row->date}}"],
                @endforeach
            ]
        }).render(document.getElementById("table-gridjs"));
    </script>
@endsection
