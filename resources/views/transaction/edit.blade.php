@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="content ">
                <form method="POST" enctype="multipart/form-data">
                @csrf
                    <h4 class="text-light mb-3 mx-3">Edit Transaksi</h4>
                    <!-- date -->
                    <div class="mb-3 mx-3">
                        <input required name="date" value="{{$transaction->date}}" type="date" class="form-control border-0" id="email" placeholder="tanggal">
                    </div>
                    <!-- desc -->
                    <div class="mb-3 mx-3">
                        <input required name="detail" value="{{$transaction->detail}}" type="text" class="form-control border-0" id="detail" placeholder="transaksi">
                    </div>
                    <!-- pengeluaran/pemasukan -->
                    <div class="mb-3 mx-3">
                        <select required class="form-select border-0" name="" id="root-category">
                            <option selected value=" ">pengeluaran</option>
                            <option value=" ">pemasukan</option>
                        </select>
                    </div>
                    <!-- kategori -->
                    <div class="mb-3 mx-3">
                        <select required name="category_sub_id" class="form-select border-0"  id="category_sub_id">
                            @foreach($CategorySubs as $CategorySub)
                                <option value="{{$CategorySub->id}}" @if($transaction->category_sub_id == $CategorySub->id) Selected @endif >{{$CategorySub->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- nominal -->
                    <div class="mb-3 mx-3">
                        <input required name="ammount" value="{{$transaction->ammount}}" type="$transaction->amount" class="form-control" id="ammount" placeholder="nominal">
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
                        <input type="submit" value="Hapus" class="btn btn-green col-5 mx-auto border-0" formaction="/transaction/{{$transaction->id}}/delete">
                        <input type="submit" value="Simpan" class="btn btn-green col-5 mx-auto border-0" formaction="/transaction/{{$transaction->id}}/update">
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
            <a href="/transaction" class="active">
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
            <a href="/wallet" >
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