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
                        <h2 class="text-end">-200.000</h2>
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
                                        <span>5.000.000</span>
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
                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Freelance</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>1.000.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-blue" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Biaya Admin</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>30.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Makanan dan Minuman</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>250.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Tagihan</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>1.500.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 43%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Transport</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>400.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 72%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Belanja</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>250.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 23%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Hiburan</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>250.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Travel</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>250.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- category -->
                        <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#editbudget">
                            <div class="category ms-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <span>Pendidikan</span>
                                    </div>
                                    <div class="col text-end">
                                        <span>1.000.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="progress mt-1" style="height: 2px;">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main-layout -->

    <!-- Modal Edit Budget-->
    <div class="modal fade " id="editbudget" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header border-0">
                <h5 class="modal-title text-light" id="exampleModalLabel">Makanan dan Minuman</h5>
                <button type="button" class="btn-close border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <!-- budget -->
                        <div class="mb-3">
                            <input required value="250000" type="number" class="form-control border-0" id="budget" placeholder="budget">
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
            <a href="transaction.html" >
                <span class="icon">
                    <img class="img-fluid" src="asset/transaksi.svg" alt="">
                </span>
                <span>transaksi</span>
            </a>
            <!-- budget -->
            <a href="budget.html" class="active">
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