@extends('layouts.master')

@section('content')

    <!-- start page content -->
    <div class="row">
        <div class="col">
            <div class="content text-light mx-3">
                <!-- header -->
                <div class="row">
                    <div class="col">
                        <h2>Balance</h2>
                    </div>
                    <div class="col">
                        <!-- <h2 class="text-end">-200.000</h2> -->
                    </div>
                </div>

                <!-- Pendapatan -->
                <div class="row ms-3">
                    <div class="col">
                        <h5>Pendapatan</h5>
                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3 ">
                                <div class="row">
                                    <div class="col">
                                        <span class="">Gaji</span>
                                    </div>
                                    <div class="col text-end">
                                        <!-- <span>5.000.000</span> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-blue" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>

                <!-- Pengeluaran -->
                <div class="row ms-3">
                    <div class="col">
                        <h5>Pengeluaran</h5>
                        <!-- category -->
                        @foreach($budgets as $budget)
                            @foreach($budget->categorySubs as $categorySub)
                                @if(($categorySub->budget)+($categorySub->transaction->sum('ammount')!=0))                         
                                    @if($categorySub->transaction->sum('ammount')>=$categorySub->budget)
                                        @php
                                        $progressBackground = 'bg-danger';
                                        $progress = 100;
                                        @endphp
                                    @else
                                        @php
                                        $progressBackground = 'bg-yellow';
                                        $progress = $categorySub->transaction->sum('ammount')/$categorySub->budget*100;
                                        @endphp
                                    @endif
                                @else
                                    @php
                                        $progress = 0;
                                        $progressBackground = 'bg-green';
                                    @endphp
                                @endif
                            <a href="/budget/{{$categorySub->id}}/edit" class="text-light">
                                <div class="category ms-3 mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <span>{{$categorySub->name}}</span>
                                        </div>
                                        <div class="col text-end">
                                            <span>{{$categorySub->transaction->sum('ammount')}}/{{$categorySub->budget}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="progress mt-1" style="height: 2px;">
                                                    
                                                <div class="progress-bar {{$progressBackground}}" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        @endforeach
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