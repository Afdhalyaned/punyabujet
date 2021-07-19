@extends('layouts.master')

@section('content')
    <!-- start page content -->
    <div class="row">
            <div class="col">
                <div class="content text-light mx-3">
                    <!-- header -->
                    <div class="row mt-3">
                        <div class="col">
                            <h2 class="text-center">Profile</h2>
                        </div>
                    </div>
                    
                    <div class="row mt-5">
                        <div class="col">
                            <!-- start register form -->
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="/profile/{{$profile->id}}/update">
                                    @csrf
                                        <!-- name -->
                                        <div class="mb-3 mx-3">
                                        <input type="text" class="form-control border-0" id="name" name="name" placeholder="name" value="{{$profile->name}}">
                                        </div>
                                        <!-- email -->
                                        <div class="mb-3 mx-3">
                                        <input type="mail" class="form-control border-0" id="email" name="email" placeholder="email" value="{{$profile->email}}">
                                        </div>
                                        <!-- password form -->
                                        <div class="mb-3 mx-3">
                                        <input type="password" class="form-control border-0" id="password" name="password" placeholder="password">
                                        </div>
                                        <!-- re-password -->
                                        <div class="mb-3 mx-3">
                                        <input type="password" class="form-control border-0" id="re-password" name="re-password" placeholder="re-password">
                                        </div>
                                        <!-- button -->
                                        <div class="mb-3 mx-3 d-grid gap-2">
                                        <button type="submit" class="btn text-dark btn-green border-0">Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end register form -->
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