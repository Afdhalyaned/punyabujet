@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="content ">
                <!-- transaction list -->
                <!-- card -->
                @foreach($transactions as $transaction)
                <a href="/transaction/{{$transaction->id}}/edit">
                    <div class="card bg-transparent text-light border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span>{{$transaction->date}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>{{$transaction->detail}}</span>
                                </div>
                                <div class="col">
                                    <span class="float-end">{{$transaction->ammount}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="badge border border-warning text-warning">{{$transaction->category_sub['name']}}</span>
                                </div>
                                <div class="col">
                                    <span class="badge bg-transparent float-end border">{{$transaction->wallet['name']}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                <!-- end transaction list -->
            </div>
        </div>
    </div>
    <!-- end main-layout -->

    <!-- start new transaction button -->
    <div class="d-grid gap-2 fix-bottom-button">
        <button class="btn btn-green col-10 mx-auto border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Transaksi</button>
    </div>
    <!-- end new transaction button -->

    <!-- Modal Create New-->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-light" id="exampleModalLabel">Edit Transakti</h5>
                    <button type="button" class="btn-close border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/transaction">
                        @csrf
                        <!-- date -->
                        <div class="mb-3">
                            <input required type="date" name="date" class="form-control border-0" id="date" placeholder="tanggal">
                        </div>
                        <!-- desc -->
                        <div class="mb-3">
                            <input required type="text" name="detail" class="form-control border-0" id="desc" placeholder="transaksi">
                        </div>
                        <!-- pengeluaran/pemasukan -->
                        <div class="mb-3">
                            <select required class="form-select border-0" name="root-category" id="root-category">
                                <option  value=" ">pengeluaran</option>
                                <option selected value=" ">pemasukan</option>
                            </select>
                        </div>
                        <!-- kategori -->
                        <div class="mb-3">
                            <select required name="category_sub_id" class="form-select border-0" id="root-category">
                                <option selected value="">--- pilih kategori ---</option>
                                @foreach($categorySubs as $categorySub)
                                    <option value="{{$categorySub->id}}">{{$categorySub->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- nominal -->
                        <div class="mb-3">
                            <input required type="number" name="ammount" class="form-control" id="amount" placeholder="nominal">
                        </div>
                        <!-- metode pembayaran -->
                        <div class="mb-3">
                            <select required name="wallet_id" class="form-select border-0" id="root-category">
                                <option selected value="">--- pilih dompet ---</option>
                                @foreach($wallets as $wallet)
                                    <option value="{{$wallet->id}}">{{$wallet->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-green col-10 mx-auto border-0">Simpan</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Transaction-->
    <div class="modal fade " id="edittransaction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header border-0">
                <h5 class="modal-title text-light" id="exampleModalLabel">Tambah Transaksi</h5>
                <button type="button" class="btn-close border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <!-- date -->
                        <div class="mb-3">
                            <input required value="2021-06-13" type="date" class="form-control border-0" id="email" placeholder="tanggal">
                        </div>
                        <!-- desc -->
                        <div class="mb-3">
                            <input required value="The BTS Meal" type="text" class="form-control border-0" id="desc" placeholder="transaksi">
                        </div>
                        <!-- pengeluaran/pemasukan -->
                        <div class="mb-3">
                            <select required class="form-select border-0" name="root-category" id="root-category">
                                <option selected value=" ">pengeluaran</option>
                                <option value=" ">pemasukan</option>
                            </select>
                        </div>
                        <!-- kategori -->
                        <div class="mb-3">
                            <select required class="form-select border-0" name="category" id="root-category">
                                <option value="">--- pilih kategori ---</option>
                                <option value="">biaya admin</option>
                                <option selected value="">makanan dan minuman</option>
                                <option value="">kontrakan</option>
                                <option value="">pulsa dan kuota</option>
                                <option value="">listrik</option>
                                <option value="">sampah</option>
                                <option value="">transport</option>
                                <option value="">snack</option>
                                <option value="">bahan makanan</option>
                                <option value="">hiburan</option>
                                <option value="">kesehatan</option>
                            </select>
                        </div>
                        <!-- nominal -->
                        <div class="mb-3">
                            <input required value="55000" type="number" class="form-control" id="amount" placeholder="nominal">
                        </div>
                        <!-- metode pembayaran -->
                        <div class="mb-3">
                            <select required class="form-select border-0" name="category" id="root-category">
                                <option  value="">--- pilih dompet ---</option>
                                <option selected value="">cash</option>
                                <option value="">rekening mandiri</option>
                                <option value="">rekening BCA</option>
                                <option value="">ovo</option>
                                <option value="">gopay</option>
                                <option value="">linkaja</option>
                                <option value="">e-money</option>
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
    </div>


    <!-- start bottom nav -->
    <div class="general-bottom-nav-wraper">
        <nav class="general-bottom-nav">
            <!-- transaction -->
            <a href="transaction.html" class="active">
                <span class="icon">
                    <img class="img-fluid" src="asset/transaksi.svg" alt="">
                </span>
                <span>transaksi</span>
            </a>
            <!-- budget -->
            <a href="budget.html" >
                <span class="icon">
                    <img class="img-fluid" src="asset/budget.svg" alt="">
                </span>
                <span>budget</span>
            </a>
            <!-- wallet -->
            <a href="dompet.html" >
                <span class="icon">
                    <img class="img-fluid" src="asset/dompet-icon.svg" alt="">
                </span>
                <span>dompet</span>
            </a>
            <!-- kategori -->
            <a href="category.html" >
                <span class="icon">
                    <img class="img-fluid" src="asset/category.svg" alt="">
                </span>
                <span>kategori</span>
            </a>
            
        </nav>
    </div>
    <!-- end bottom nav -->
@endsection