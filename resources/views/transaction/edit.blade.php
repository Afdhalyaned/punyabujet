@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="content ">
                <form action="">
                @csrf
                    <h4 class="text-light mb-3 mx-3">Edit Transaksi</h4>
                    <!-- date -->
                    <div class="mb-3 mx-3">
                        <input required value="{{$transaction->date}}" type="date" class="form-control border-0" id="email" placeholder="tanggal">
                    </div>
                    <!-- desc -->
                    <div class="mb-3 mx-3">
                        <input required value="{{$transaction->detail}}" type="text" class="form-control border-0" id="desc" placeholder="transaksi">
                    </div>
                    <!-- pengeluaran/pemasukan -->
                    <div class="mb-3 mx-3">
                        <select required class="form-select border-0" name="root-category" id="root-category">
                            <option selected value=" ">pengeluaran</option>
                            <option value=" ">pemasukan</option>
                        </select>
                    </div>
                    <!-- kategori -->
                    <div class="mb-3 mx-3">
                        <select required class="form-select border-0" name="category" id="category">
                            @foreach($CategorySubs as $CategorySub)
                                <option value="{{$CategorySub->id}}" @if($transaction->category_sub_id == $CategorySub->id) Selected @endif >{{$CategorySub->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- nominal -->
                    <div class="mb-3 mx-3">
                        <input required value="55000" type="$transaction->amount" class="form-control" id="amount" placeholder="nominal">
                    </div>
                    <!-- metode pembayaran -->
                    <div class="mb-3 mx-3">
                        <select required class="form-select border-0" name="wallet" id="wallet">
                            @foreach($wallets as $wallet)
                                <option value="{{$wallet->id}}" @if($transaction->wallet_id == $wallet->id) Selected @endif >{{$wallet->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-green col-5 mx-auto border-0">Hapus</button>
                        <button type="submit" class="btn btn-green col-5 mx-auto border-0">Simpan</button>
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
            <a href="transaction.html" class="active">
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
            <a href="dompet.html" >
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