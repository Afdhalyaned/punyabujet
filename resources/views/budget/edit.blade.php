@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="content ">
                <form method="POST" enctype="multipart/form-data">
                @csrf
                    <h4 class="text-light my-3 mx-3">Bujet {{$budget->name}}</h4>
                    
                    <!-- sub karegori -->
                    <div class="mb-3 mx-3">
                        <input required value="{{$budget->budget}}" name="budget" type="number" class="form-control border-0" id="budget" placeholder="sub kategori">
                    </div>
                    <div class="modal-footer border-0">
                        <input type="submit" value="Simpan" class="btn btn-green col-5 mx-auto border-0" formaction="/budget/{{$budget->id}}/update">
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
            <a href="/transaction" >
                <span class="icon">
                    <img class="img-fluid" src="asset/transaksi.svg" alt="">
                </span>
                <span>transaksi</span>
            </a>
            <!-- budget -->
            <a href="/budget" class="active">
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