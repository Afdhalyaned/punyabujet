@extends('layouts.master')

@section('content')

    <!-- start page content -->
    <div class="row">
        <div class="col">
            <div class="content text-light mx-3">
                <!-- header -->
                <div class="row mb-3">
                    <div class="col">
                        <h2>Ubah Dompet</h2>
                    </div>
                    <div class="col">
                        <h2 class="text-end"></h2>
                    </div>
                </div>
                <!-- wallet -->
                <form action="/wallet" method="POST">
                @csrf
                    <!-- budget -->
                    <div class="mb-3">
                        <input required name="name" value="{{$wallet->name}}" type="text" class="form-control border-0" id="wallet" placeholder="Nama dompet">
                    </div>
                    <div class="modal-footer border-0">
                        <input type="submit" value="Hapus" class="btn btn-green col-5 mx-auto border-0" formaction="/wallet/{{$wallet->id}}/delete">
                        <input type="submit" value="Simpan" class="btn btn-green col-5 mx-auto border-0" formaction="/wallet/{{$wallet->id}}/update">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end main-layout -->
    
    <!-- start bottom nav -->
    <div class="general-bottom-nav-wraper">
        <nav class="general-bottom-nav">
            <!-- transaction -->
            <a href="/transaction">
                <span class="icon">
                    <img class="img-fluid" src="{{asset('asset/transaksi.svg')}}" alt="">
                </span>
                <span>transaksi</span>
            </a>
            <!-- budget -->
            <a href="budget.html" >
                <span class="icon">
                    <img class="img-fluid" src="{{asset('asset/budget.svg')}}" alt="">
                </span>
                <span>budget</span>
            </a>
            <!-- wallet -->
            <a href="/wallet" class="active">
                <span class="icon">
                    <img class="img-fluid" src="{{asset('asset/dompet-icon.svg')}}" alt="">
                </span>
                <span>dompet</span>
            </a>
            <!-- kategori -->
            <a href="category.html" >
                <span class="icon">
                    <img class="img-fluid" src="{{asset('asset/category.svg')}}" alt="">
                </span>
                <span>kategori</span>
            </a>
        </nav>
    </div>
    <!-- end bottom nav -->

@endsection