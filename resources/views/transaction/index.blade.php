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
        <button class="btn btn-green col-10 mx-auto border-0" data-bs-toggle="modal" data-bs-target="#createtransaction">Tambah Transaksi</button>
    </div>
    <!-- end new transaction button -->

    <!-- Modal Create New-->
    <div class="modal fade " id="createtransaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-light" id="exampleModalLabel">Tambah Transakti</h5>
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
                            <select required class="form-select border-0" name="root-category" onchange="changeStatus()" id="categoryType">
                                <option  value="1">Pemasukan</option>
                                <option selected value="2">Pengeluaran</option>
                            </select>
                        </div>
                        <!-- kategori pengeluaran-->
                        <div class="mb-3" id="expence-category">
                            <select name="category_income" data-width="100%" id="expence" class="form-select" >
                                <option selected value="">--- kategori pengeluaran ---</option>
                                @foreach($categorySubs as $categorySub)
                                    <option value="{{$categorySub->id}}">{{$categorySub->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- kategori pemasukan-->
                        <div class="mb-3" id="income-category" style="visibility: hidden">
                            <select name="category_expence" class="form-select border-0 ">
                                <option selected value="">--- pilih pemasukan ---</option>
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
                            <select required name="wallet_id" data-width="100%" id="wallet" class="form-select border-0" id="root-category">
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

    <!-- start bottom nav -->
    <div class="general-bottom-nav-wraper">
        <nav class="general-bottom-nav">
            <!-- transaction -->
            <a href="/transaction" class="active">
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

@section('js')
<script src="{{asset('vendor/jquery/jQuery3.6.0.js')}}"></script>
<script src="{{asset('vendor/select2-4.1.0-rc.0/dist/js/select2.min.js')}}"></script>
<script>
    // select2 Library
    $(document).ready(function() {
        $('#expence').select2({
        dropdownParent: $('#createtransaction')
        });
        $('#wallet').select2({
        dropdownParent: $('#createtransaction')
        });
    })
</script>
<script>
    function changeStatus()
    {
        var categoryType = document.getElementById("categoryType");
        if (categoryType.value == "1"){
            document.getElementById("income-category").style.visibility="visible";
        }
        else{
            document.getElementById("income-category").style.visibility="hidden";
        }
        if (categoryType.value == "2"){
            document.getElementById("expence-category").style.visibility="visible";
        }
        else{
            document.getElementById("expence-category").style.visibility="hidden";
        }
    }
</script>


@endsection