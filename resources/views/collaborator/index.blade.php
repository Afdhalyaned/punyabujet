@extends('layouts.master')

@section('content')
        <!-- start page content -->
        <div class="row">
            <div class="col">
                <div class="content text-light mx-3">
                    <!-- header -->
                    <div class="row mt-3">
                        <div class="col">
                            <h2 class="text-center">Kolaborator</h2>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <!-- start collaborator form -->
                            <div class="row">
                                <div class="col">
                                    <form action="#">
                                        <!-- email -->
                                        <div class="mb-3 mx-3">
                                        <input type="email" class="form-control border-0" id="email" name="email" placeholder="user@email">
                                        </div>
                                        <!-- button -->
                                        <div class="mb-3 mx-3 d-grid gap-2">
                                        <button type="submit" class="btn text-dark btn-green border-0">Tambah Kolaborator</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end collaborator form -->
                            <!-- existing collaborator -->
                            <div class="row">
                                <div class="col">
                                    <!-- collaborator email -->
                                    @foreach($collaborators as $collaborator)
                                    <div class="row mx-3">
                                        <div class="col-sm-10">
                                            <div class="mb-3">
                                            <input disabled type="email" class="form-control border-0" id="email" name="email" placeholder="email" value="{{$collaborator->email}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="mb-3 d-grid">
                                            <button type="submit" disable class="btn text-dark btn-green border-0">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            <!-- end existing collaborator -->
                        </div>
                    </div>
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
                <a href="/budget">
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