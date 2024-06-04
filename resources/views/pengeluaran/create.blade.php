@extends('layouts.master')
@section('title')
    Tambah Data Pengeluaran
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Forms
        @endslot
        @slot('title')
            Form layout
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Tambah Data Pengeluaran</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form method="post" action="/tambah-pengeluaran/store" data-toggle="validator">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="description"
                                    placeholder="Masukkan Nama Produk">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Kategori</label>
                                        <select class="form-control" id="choices-single-no-sorting"
                                            name="kategori" data-choices data-choices-sorting-false>
                                            <option value="operasional">Operasional</option>
                                            <option value="hiburan">Hiburan</option>
                                            <option value="belanja">Belanja</option>
                                            <option value="lain-lain">Lain-Lain</option>
                                        </select>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga"
                                    placeholder="Masukkan Harga Produk">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Tanggal Pembelian</label>
                                <input type="date" name="date" class="form-control" id="date">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
