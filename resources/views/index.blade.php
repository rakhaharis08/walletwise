@extends('layouts.master')
@section('title')
Dashboard WalletWise
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col">

        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">Hi, Asya!</h4>
                            <p class="text-muted mb-0">Cek Keuanganmu Sekarang Yuk!</p>
                        </div>
                        <div class="mt-3 mt-lg-0">
                                <div class="row g-3 mb-0 align-items-center">
                                    <div class="col-sm-auto">
                                        <form method="post" action="/index-filter">
                                            {{ csrf_field() }}
                                            <div class="input-group">
                                                <input type="text" 
                                                    name="filter" 
                                                    class="form-control border-0 dash-filter-picker shadow" 
                                                    data-provider="flatpickr" 
                                                    data-range-date="true" 
                                                    data-date-format="d M, Y" 
                                                    placeholder="{{ $startofmonth }} to {{ $endofmonth }}">
                                                <div class="input-group-text bg-primary border-primary text-white">
                                                    <i class="ri-calendar-2-line"></i>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                        </div>
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            



            <div class="row">
                
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Dompet</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">RP.<span class="counter-value" data-target="{{$dompet}}">0</span>
                                    </h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Pemasukan</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">RP.<span class="counter-value" data-target="{{$pemasukan}}">0</span></h4>
                                    <a href="" class="text-decoration-underline">Lihat Data <br>Pemasukan</a>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                        <i class="bx bx-dollar-circle text-primary"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Pengeluaran</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">RP.<span class="counter-value" data-target="{{$pengeluaran}}">0</span>
                                    </h4>
                                    <a href="" class="text-decoration-underline">Lihat Data Pengeluaran</a>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                        <i class="bx bx-dollar-circle text-primary"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Tagihan</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">RP.<span class="counter-value" data-target="{{$tagihan}}">0</span>
                                    </h4>
                                    <a href="" class="text-decoration-underline">Lihat Data <br>Tagihan</a>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                        <i class="bx bx-dollar-circle text-primary"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

            </div> <!-- end row-->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                        </div><!-- end card header -->

                        <div class="card-header p-0 border-0 bg-soft-light">
                            <div class="row g-0 text-center">
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1">RP.<span class="counter-value" data-target="{{$pemasukan/1000000}}">0</span> Juta</h5>
                                        <p class="text-muted mb-0">Pemasukan</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1">RP.<span class="counter-value" data-target="{{$pengeluaran/1000000}}">0</span> Juta</h5>
                                        <p class="text-muted mb-0">Pengeluaran</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                        <h5 class="mb-1 text-success"><span class="counter-value" data-target="40">0</span>%</h5>
                                        <p class="text-muted mb-0">Defisit</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body p-0 pb-2">
                            <div class="w-150">
                                <div id="customer_impression_charts" data-colors='["--vz-info", "--vz-primary", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <!-- end col -->
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Top Spending</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                    <tbody>
                                        @foreach($top_spending as $row)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://static.vecteezy.com/system/resources/previews/007/372/197/non_2x/bag-icon-shopping-bag-icon-bag-logo-bag-illustration-free-vector.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="{{ URL::asset('/apps-ecommerce-product-details') }}" class="text-reset">{{$row->description}}</a></h5>
                                                        <span class="text-muted">1 May 2024</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">RP.{{number_format($row->amount)}}</h5>
                                                <span class="text-muted">Amount</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">{{$row->category}}</h5>
                                                <span class="text-muted">Category</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                <div class="col-sm">
                                    <div class="text-muted">
                                        Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                    </div>
                                </div>
                                <div class="col-sm-auto  mt-3 mt-sm-0">
                                    <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link">←</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">→</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Top Income</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                    <tbody>
                                        @foreach($top_income as $row)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h5 class="fs-14 my-1 fw-medium"><a href="{{ URL::asset('/apps-ecommerce-seller-details') }}" class="text-reset">{{$row->description}}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-muted">{{$row->category}}</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">RP.{{$row->amount/1000000}} Juta</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <!-- end -->
                                    </tbody>
                                </table><!-- end table -->
                            </div>

                            <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                <div class="col-sm">
                                    <div class="text-muted">
                                        Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                    </div>
                                </div>
                                <div class="col-sm-auto  mt-3 mt-sm-0">
                                    <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link">←</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">→</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div> <!-- .card-body-->
                    </div> <!-- .card-->
                </div> <!-- .col-->
            </div> <!-- end row-->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Pengeluaran Berdasarkan Kategori</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="store-visits-source" data-colors='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.70", "--vz-primary-rgb, 0.60", "--vz-primary-rgb, 0.45"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div> <!-- .card-->
                </div> <!-- .col-->

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Recent Purchases</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                    <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Produk</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach($recent_purchases as $row)
                                        <tr>
                                            <td>
                                                {{$no++}}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">{{ $row->description }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-success">RP.{{ number_format($row->amount) }}</span>
                                            </td>
                                            <td>{{ $row->category }}</td>
                                            <td>
                                                <span class="badge badge-soft-success">Paid</span>
                                            </td>
                                        </tr>
                                    @endforeach

                                        <!-- end tr -->
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div>
                        </div>
                    </div> <!-- .card-->
                </div> <!-- .col-->
            </div> <!-- end row-->

        </div> <!-- end .h-100-->

    </div> <!-- end col -->

    <div class="col-auto layout-rightside-col">
        <div class="overlay"></div>
        <div class="layout-rightside">
            <div class="card h-100 rounded-0">
                <div class="card-body p-0">
                    <div class="p-3">
                        <h6 class="text-muted mb-0 text-uppercase fw-semibold">Recent Activity</h6>
                    </div>
                    <div data-simplebar style="max-height: 410px;" class="p-3 pt-0">
                        <div class="acitivity-timeline acitivity-main">
                            <div class="acitivity-item d-flex">
                                <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                    <div class="avatar-title bg-soft-success text-success rounded-circle">
                                        <i class="ri-shopping-cart-2-line"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 lh-base">Purchase by James Price</h6>
                                    <p class="text-muted mb-1">Product noise evolve smartwatch </p>
                                    <small class="mb-0 text-muted">02:14 PM Today</small>
                                </div>
                            </div>
                            <div class="acitivity-item py-3 d-flex">
                                <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                    <div class="avatar-title bg-soft-danger text-danger rounded-circle">
                                        <i class="ri-stack-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 lh-base">Added new <span class="fw-semibold">style
                                            collection</span></h6>
                                    <p class="text-muted mb-1">By Nesta Technologies</p>
                                    <div class="d-inline-flex gap-2 border border-dashed p-2 mb-2">
                                        <a href="{{ URL::asset('/apps-ecommerce-product-details') }}" class="bg-light rounded p-1">
                                            <img src="{{ URL::asset('build/images/products/img-8.png') }}" alt="" class="img-fluid d-block" />
                                        </a>
                                        <a href="{{ URL::asset('/apps-ecommerce-product-details') }}" class="bg-light rounded p-1">
                                            <img src="{{ URL::asset('build/images/products/img-2.png') }}" alt="" class="img-fluid d-block" />
                                        </a>
                                        <a href="{{ URL::asset('/apps-ecommerce-product-details') }}" class="bg-light rounded p-1">
                                            <img src="{{ URL::asset('build/images/products/img-10.png') }}" alt="" class="img-fluid d-block" />
                                        </a>
                                    </div>
                                    <p class="mb-0 text-muted"><small>9:47 PM Yesterday</small></p>
                                </div>
                            </div>
                            <div class="acitivity-item py-3 d-flex">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 lh-base">Natasha Carey have liked the products
                                    </h6>
                                    <p class="text-muted mb-1">Allow users to like products in your
                                        WooCommerce store.</p>
                                    <small class="mb-0 text-muted">25 Dec, 2021</small>
                                </div>
                            </div>
                            <div class="acitivity-item py-3 d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xs acitivity-avatar">
                                        <div class="avatar-title rounded-circle bg-secondary">
                                            <i class="mdi mdi-sale fs-14"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 lh-base">Today offers by <a href="{{ URL::asset('/apps-ecommerce-seller-details') }}" class="link-secondary">Digitech
                                            Galaxy</a></h6>
                                    <p class="text-muted mb-2">Offer is valid on orders of Rs.500 Or
                                        above for selected products only.</p>
                                    <small class="mb-0 text-muted">12 Dec, 2021</small>
                                </div>
                            </div>
                            <div class="acitivity-item py-3 d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xs acitivity-avatar">
                                        <div class="avatar-title rounded-circle bg-soft-danger text-danger">
                                            <i class="ri-bookmark-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 lh-base">Favoried Product</h6>
                                    <p class="text-muted mb-2">Esther James have favorited product.
                                    </p>
                                    <small class="mb-0 text-muted">25 Nov, 2021</small>
                                </div>
                            </div>
                            <div class="acitivity-item py-3 d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xs acitivity-avatar">
                                        <div class="avatar-title rounded-circle bg-secondary">
                                            <i class="mdi mdi-sale fs-14"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 lh-base">Flash sale starting <span class="text-primary">Tomorrow.</span></h6>
                                    <p class="text-muted mb-0">Flash sale by <a href="javascript:void(0);" class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                    <small class="mb-0 text-muted">22 Oct, 2021</small>
                                </div>
                            </div>
                            <div class="acitivity-item py-3 d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xs acitivity-avatar">
                                        <div class="avatar-title rounded-circle bg-soft-info text-info">
                                            <i class="ri-line-chart-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                    <p class="text-muted mb-2"><span class="text-danger">2 days
                                            left</span> notification to submit the monthly sales
                                        report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports
                                            Builder</a></p>
                                    <small class="mb-0 text-muted">15 Oct</small>
                                </div>
                            </div>
                            <div class="acitivity-item d-flex">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 lh-base">Frank Hook Commented</h6>
                                    <p class="text-muted mb-2 fst-italic">" A product that has
                                        reviews is more likable to be sold than a product. "</p>
                                    <small class="mb-0 text-muted">26 Aug, 2021</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 mt-2">
                        <h6 class="text-muted mb-3 text-uppercase fw-semibold">Top 10 Categories
                        </h6>

                        <ol class="ps-3 text-muted">
                            <li class="py-1">
                                <a href="#" class="text-muted">Mobile & Accessories <span class="float-end">(10,294)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Desktop <span class="float-end">(6,256)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Electronics <span class="float-end">(3,479)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Home & Furniture <span class="float-end">(2,275)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Grocery <span class="float-end">(1,950)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Fashion <span class="float-end">(1,582)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Appliances <span class="float-end">(1,037)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Beauty, Toys & More <span class="float-end">(924)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Food & Drinks <span class="float-end">(701)</span></a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="text-muted">Toys & Games <span class="float-end">(239)</span></a>
                            </li>
                        </ol>
                        <div class="mt-3 text-center">
                            <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all
                                Categories</a>
                        </div>
                    </div>
                    <div class="p-3">
                        <h6 class="text-muted mb-3 text-uppercase fw-semibold">Products Reviews</h6>
                        <!-- Swiper -->
                        <div class="swiper vertical-swiper" style="height: 250px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card border border-dashed shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="{{ URL::asset('build/images/companies/img-1.png') }}" alt="" height="30">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div>
                                                        <p class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                            " Great product and looks great, lots of
                                                            features. "</p>
                                                        <div class="fs-11 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-0 text-muted">
                                                        - by <cite title="Source Title">Force
                                                            Medicines</cite>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border border-dashed shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div>
                                                        <p class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                            " Amazing template, very easy to
                                                            understand and manipulate. "</p>
                                                        <div class="fs-11 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-0 text-muted">
                                                        - by <cite title="Source Title">Henry
                                                            Baird</cite>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border border-dashed shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="{{ URL::asset('build/images/companies/img-8.png') }}" alt="" height="30">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div>
                                                        <p class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                            "Very beautiful product and Very helpful
                                                            customer service."</p>
                                                        <div class="fs-11 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-line"></i>
                                                            <i class="ri-star-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-0 text-muted">
                                                        - by <cite title="Source Title">Zoetic
                                                            Fashion</cite>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border border-dashed shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div>
                                                        <p class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                            " The product is very beautiful. I like
                                                            it. "</p>
                                                        <div class="fs-11 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                            <i class="ri-star-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-0 text-muted">
                                                        - by <cite title="Source Title">Nancy
                                                            Martino</cite>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-3">
                        <h6 class="text-muted mb-3 text-uppercase fw-semibold">Customer Reviews</h6>
                        <div class="bg-light px-3 py-2 rounded-2 mb-2">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="fs-16 align-middle text-warning">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <h6 class="mb-0">4.5 out of 5</h6>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="text-muted">Total <span class="fw-medium">5.50k</span>
                                reviews</div>
                        </div>

                        <div class="mt-3">
                            <div class="row align-items-center g-2">
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0">5 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-1">
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50.16%" aria-valuenow="50.16" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0 text-muted">2758</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row align-items-center g-2">
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0">4 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-1">
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 29.32%" aria-valuenow="29.32" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0 text-muted">1063</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row align-items-center g-2">
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0">3 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-1">
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 18.12%" aria-valuenow="18.12" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0 text-muted">997</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row align-items-center g-2">
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0">2 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-1">
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0 text-muted">227</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row align-items-center g-2">
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0">1 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-1">
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="p-1">
                                        <h6 class="mb-0 text-muted">408</h6>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div>

                    <div class="card sidebar-alert bg-light border-0 text-center mx-4 mb-0 mt-3">
                        <div class="card-body">
                            <img src="{{ URL::asset('build/images/giftbox.png') }}" alt="">
                            <div class="mt-4">
                                <h5>Invite New Seller</h5>
                                <p class="text-muted lh-base">Refer a new seller to us and earn $100
                                    per refer.</p>
                                <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-fill label-icon align-middle rounded-pill fs-16 me-2"></i>
                                    Invite Now</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end card-->
        </div> <!-- end .rightbar-->

    </div> <!-- end col -->
</div>
@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js')}}"></script>
<!-- dashboard init -->
<script>
/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Ecommerce Dashboard init js
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");
        if (colors) {
            colors = JSON.parse(colors);
            return colors.map(function (value) {
                var newValue = value.replace(" ", "");
                if (newValue.indexOf(",") === -1) {
                    var color = getComputedStyle(document.documentElement).getPropertyValue(
                        newValue
                    );
                    if (color) return color.trim();
                    else return newValue;
                } else {
                    var val = value.split(",");
                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(
                            document.documentElement
                        ).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        } else {
            console.warn('data-colors atributes not found on', chartId);
        }
    }
}

var linechartcustomerColors = getChartColorsArray("customer_impression_charts");
if (linechartcustomerColors) {
    var options = {
        series: [{
                name: "Pengeluaran",
                type: "area",
                data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67],
            },
            {
                name: "Pemasukkan",
                type: "bar",
                data: [
                    89.25, 98.58, 68.74, 108.87, 77.54, 84.03, 51.24, 28.57, 92.57, 42.36,
                    88.51, 36.57,
                ],
            },
            {
                name: "Tagihan",
                type: "line",
                data: [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35],
            },
        ],
        chart: {
            height: 370,
            type: "line",
            toolbar: {
                show: false,
            },
        },
        stroke: {
            curve: "straight",
            dashArray: [0, 0, 8],
            width: [2, 0, 2.2],
        },
        fill: {
            opacity: [0.1, 0.9, 1],
        },
        markers: {
            size: [0, 0, 0],
            strokeWidth: 2,
            hover: {
                size: 4,
            },
        },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
        grid: {
            show: true,
            xaxis: {
                lines: {
                    show: true,
                },
            },
            yaxis: {
                lines: {
                    show: false,
                },
            },
            padding: {
                top: 0,
                right: -2,
                bottom: 15,
                left: 10,
            },
        },
        legend: {
            show: true,
            horizontalAlign: "center",
            offsetX: 0,
            offsetY: -5,
            markers: {
                width: 9,
                height: 9,
                radius: 6,
            },
            itemMargin: {
                horizontal: 10,
                vertical: 0,
            },
        },
        plotOptions: {
            bar: {
                columnWidth: "30%",
                barHeight: "70%",
            },
        },
        colors: linechartcustomerColors,
        tooltip: {
            shared: true,
            y: [{
                    formatter: function (y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0);
                        }
                        return y;
                    },
                },
                {
                    formatter: function (y) {
                        if (typeof y !== "undefined") {
                            return "$" + y.toFixed(2) + "k";
                        }
                        return y;
                    },
                },
                {
                    formatter: function (y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " Sales";
                        }
                        return y;
                    },
                },
            ],
        },
    };
    var chart = new ApexCharts(
        document.querySelector("#customer_impression_charts"),
        options
    );
    chart.render();
}

// Simple Donut Charts
var chartDonutBasicColors = getChartColorsArray("store-visits-source");
if (chartDonutBasicColors) {
    var options = {
        series: [{{$percentage_operasional}},30,10,40],
        labels: ["Pakaian", "Operasional", "Hiburan", "Lain Lain"],
        chart: {
            height: 333,
            type: "donut",
        },
        legend: {
            position: "bottom",
        },
        stroke: {
            show: false
        },
        dataLabels: {
            dropShadow: {
                enabled: false,
            },
        },
        colors: chartDonutBasicColors,
    };

    var chart = new ApexCharts(
        document.querySelector("#store-visits-source"),
        options
    );
    chart.render();
}

// world map with markers
var vectorMapWorldMarkersColors = getChartColorsArray("sales-by-locations");
if (vectorMapWorldMarkersColors) {
    var worldemapmarkers = new jsVectorMap({
        map: "world_merc",
        selector: "#sales-by-locations",
        zoomOnScroll: false,
        zoomButtons: false,
        selectedMarkers: [0, 5],
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: 0.25,
                fill: vectorMapWorldMarkersColors[0],
                fillOpacity: 1,
            },
        },
        markersSelectable: true,
        markers: [{
                name: "Palestine",
                coords: [31.9474, 35.2272],
            },
            {
                name: "Russia",
                coords: [61.524, 105.3188],
            },
            {
                name: "Canada",
                coords: [56.1304, -106.3468],
            },
            {
                name: "Greenland",
                coords: [71.7069, -42.6043],
            },
        ],
        markerStyle: {
            initial: {
                fill: vectorMapWorldMarkersColors[1],
            },
            selected: {
                fill: vectorMapWorldMarkersColors[2],
            },
        },
        labels: {
            markers: {
                render: function (marker) {
                    return marker.name;
                },
            },
        },
    });
}

// Vertical Swiper
var swiper = new Swiper(".vertical-swiper", {
    slidesPerView: 2,
    spaceBetween: 10,
    mousewheel: true,
    loop: true,
    direction: "vertical",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

var layoutRightSideBtn = document.querySelector('.layout-rightside-btn');
if (layoutRightSideBtn) {
    Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function (item) {
        var userProfileSidebar = document.querySelector(".layout-rightside-col");
        item.addEventListener("click", function () {
            if (userProfileSidebar.classList.contains("d-block")) {
                userProfileSidebar.classList.remove("d-block");
                userProfileSidebar.classList.add("d-none");
            } else {
                userProfileSidebar.classList.remove("d-none");
                userProfileSidebar.classList.add("d-block");
            }
        });
    });
    window.addEventListener("resize", function () {
        var userProfileSidebar = document.querySelector(".layout-rightside-col");
        if (userProfileSidebar) {
            Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function () {
                if (window.outerWidth < 1699 || window.outerWidth > 3440) {
                    userProfileSidebar.classList.remove("d-block");
                } else if (window.outerWidth > 1699) {
                    userProfileSidebar.classList.add("d-block");
                }
            });
        }

        var htmlAttr = document.documentElement;
        if(htmlAttr.getAttribute("data-layout") == "semibox"){
            userProfileSidebar.classList.remove("d-block");
            userProfileSidebar.classList.add("d-none");
        }
    });
    var overlay = document.querySelector('.overlay');
    if (overlay) {
        document.querySelector(".overlay").addEventListener("click", function () {
            if (document.querySelector(".layout-rightside-col").classList.contains('d-block') == true) {
                document.querySelector(".layout-rightside-col").classList.remove("d-block");
            }
        });
    }
}

window.addEventListener("load", function () {
    var userProfileSidebar = document.querySelector(".layout-rightside-col");
    if (userProfileSidebar) {
        Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function () {
            if (window.outerWidth < 1699 || window.outerWidth > 3440) {
                userProfileSidebar.classList.remove("d-block");
            } else if (window.outerWidth > 1699) {
                userProfileSidebar.classList.add("d-block");
            }
        });
    }

    var htmlAttr = document.documentElement

    if(htmlAttr.getAttribute("data-layout") == "semibox"){
        if (window.outerWidth > 1699) {
            userProfileSidebar.classList.remove("d-block");
            userProfileSidebar.classList.add("d-none");
        }
    }
});
</script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
