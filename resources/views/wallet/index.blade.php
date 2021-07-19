@extends('layouts.master')

@section('content')

    <!-- start page content -->
    <div class="row">
        <div class="col">
            <div class="content text-light mx-3">
                <!-- header -->
                <div class="row">
                    <div class="col">
                        <h2>Dompet</h2>
                    </div>
                    <div class="col">
                        <h2 class="text-end">0</h2>
                    </div>
                </div>
                @foreach($wallets as $wallet)
                <!-- wallet -->
                <a href="/wallet/{{$wallet->id}}/edit">
                    <div class="category text-white">
                        <div class="row mx-3 mb-1">
                            <div class="col">
                                <span>{{$wallet->name}}</span>
                            </div>
                            <div class="col text-end">
                                <span>0</span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end main-layout -->

    <!-- start new wallet button -->
    <div class="d-grid gap-2 fix-bottom-button">
        <button class="btn btn-green col-10 mx-auto border-0" data-bs-toggle="modal" data-bs-target="#newwallet">Tambah Dompet</button>
    </div>

    <!-- Modal new wallet-->
    <div class="modal fade " id="newwallet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header border-0">
                <h5 class="modal-title text-light" id="exampleModalLabel">Tambah Dompet</h5>
                <button type="button" class="btn-close border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/wallet" method="POST">
                    @csrf
                        <!-- budget -->
                        <div class="mb-3">
                            <input required name="name" type="text" class="form-control border-0" id="wallet" placeholder="Nama dompet">
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
            <a href="/wallet" class="active">
                <span class="icon">
                    <img class="img-fluid" src="asset/dompet-icon.svg" alt="">
                </span>
                <span>dompet</span>
            </a>
            <!-- kategori -->
            <a href="/category" >
                <span class="icon">
                    <img class="img-fluid" src="asset/category.svg" alt="">
                </span>
                <span>kategori</span>
            </a>
        </nav>
    </div>
    <!-- end bottom nav -->

@endsection