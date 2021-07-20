@extends('layouts.master')

@section('content')

    <!-- start page content -->
    <div class="row">
        <div class="col">
            <div class="content text-light mx-3">
                <!-- header -->
                <div class="row">
                    <div class="col">
                        <h2>Kategori</h2>
                    </div>
                </div>
                <!-- pendapatan -->
                <div class="row income border rounded mx-3 mb-3 border-blue">
                    <div class="col">
                        <div class="row ">
                            <div class="col">
                                <span class="fs-5">Pendapatan</span>
                            </div>
                            <div class="col text-end">
                                <span class="fs-5">0</span>
                            </div>
                        </div>
                        <hr class="hr-blue">
                        <!-- category -->
                        <div class="category">
                            <div class="row">
                                <div class="col">
                                    gaji
                                </div>
                                <div class="col text-end">
                                    0
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- pengeluaran -->
                <div class="row income border border-yellow rounded mx-3">
                    <div class="col">
                        <div class="row ">
                            <div class="col">
                                <span class="fs-5">Pengeluaran</span>
                            </div>
                            <div class="col text-end">
                                <!-- <span class="fs-5">4.500.000</span> -->
                            </div>
                        </div>
                        <hr class="hr-yellow">
                        @foreach ($categories as $category)
                        <!-- category -->
                        <div class="category">
                            <div class="row">
                                <div class="col">
                                    <span class="fw-bolder">{{$category->name}}</span>
                                </div>
                                <div class="col text-end">
                                    <!-- <span class="fw-bolder">4.000.000</span> -->
                                </div>
                            </div>
                            @foreach($category->categorySubs as $categorySub)
                            <a href="/category/{{$categorySub->id}}/edit">
                            <!-- sub category -->
                            <div class="sub-category mx-3 text-white">
                                <div class="row">
                                    <div class="col-8">
                                        <span>{{$categorySub->name}}</span>
                                    </div>
                                    <div class="col-4 text-end">
                                        <span>{{$categorySub->transaction->sum('ammount')}}</span>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endforeach
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main-layout -->

    <!-- start new category button -->
    <div class="d-grid gap-2 fix-bottom-button">
        <button class="btn btn-green col-10 mx-auto border-0" data-bs-toggle="modal" data-bs-target="#newcategory">Tambah Kategori</button>
    </div>

    <!-- Modal new category-->
    <div class="modal fade " id="newcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header border-0">
                <h5 class="modal-title text-light" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="btn-close border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/category">
                    @csrf
                        <!-- karegori -->
                        <div class="mb-3">
                            <select required name="category_id" class="form-select border-0" id="root-category">
                                <option selected value="">--- pilih kategori ---</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- sub karegori -->
                        <div class="mb-3">
                            <input required name="category_sub_name" type="text" class="form-control border-0" id="sub-category" placeholder="sub kategori">
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-green col-10 mx-auto border-0">Simpan</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
    
    <!-- start bottom nav -->
    <div class="general-bottom-nav-wraper">
        <nav class="general-bottom-nav">
            <!-- transaction -->
            <a href="/transaction" >
                <span class="icon">
                    <img class="img-fluid" src="asset/transaksi.svg" alt="">
                </span>
                <span>transaksi</span>
            </a>
            <!-- budget -->
            <a href="/budget" >
                <span class="icon">
                    <img class="img-fluid" src="asset/budget.svg" alt="">
                </span>
                <span>budget</span>
            </a>
            <!-- wallet -->
            <a href="/wallet" >
                <span class="icon">
                    <img class="img-fluid" src="asset/dompet-icon.svg" alt="">
                </span>
                <span>dompet</span>
            </a>
            <!-- kategori -->
            <a href="/category" class="active">
                <span class="icon">
                    <img class="img-fluid" src="asset/category.svg" alt="">
                </span>
                <span>kategori</span>
            </a>
        </nav>
    </div>
    <!-- end bottom nav -->

@endsection
