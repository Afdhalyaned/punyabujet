@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="content ">
                <form method="POST" enctype="multipart/form-data">
                @csrf
                    <h4 class="text-light mb-3 mx-3">Edit Category</h4>
                    <!-- karegori -->
                    <div class="mb-3 mx-3">
                        <select required name="category_id" class="form-select border-0" id="root-category">
                            @foreach($allCategories as $allCategory)
                                <option value="{{$allCategory->id}}" @if($category->category_id == $allCategory->id) Selected @endif> {{$allCategory->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- sub karegori -->
                    <div class="mb-3 mx-3">
                        <input required value="{{$category->name}}" name="category_sub_name" type="text" class="form-control border-0" id="sub-category" placeholder="sub kategori">
                    </div>
                    <div class="modal-footer border-0">
                        <input type="submit" value="Hapus" class="btn btn-green col-5 mx-auto border-0" formaction="/category/{{$category->id}}/delete">
                        <input type="submit" value="Simpan" class="btn btn-green col-5 mx-auto border-0" formaction="/category/{{$category->id}}/update">
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