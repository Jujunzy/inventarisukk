@extends('layouts.app_modern')

@section('content')
    <div class="container-fluid" style="background: linear-gradient(to right, #f8f9fa, #2e4964); min-height: 100vh;">
        <div class="row">
            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h5 class="h5">Dashboard Admin</h5>
                </div>

                <!-- Cards Section -->
                <div class="row g-3">
                    <!-- Kategori Card -->
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('kategori.index') }}" class="text-decoration-none" data-bs-toggle="tooltip" title="Kelola semua kategori barang">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-list fa-2x text-primary mb-3 animated-hover"></i>
                                    <h5 class="card-title">Kelola Kategori</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Barang Card -->
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('barang.index') }}" class="text-decoration-none" data-bs-toggle="tooltip" title="Kelola semua barang">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-box fa-2x text-success mb-3 animated-hover"></i>
                                    <h5 class="card-title">Kelola Barang</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Supplier Card -->
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('supplier.index') }}" class="text-decoration-none" data-bs-toggle="tooltip" title="Kelola semua supplier">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-truck fa-2x text-warning mb-3 animated-hover"></i>
                                    <h5 class="card-title">Kelola Supplier</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Pembelian Card -->
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('pembelian.index') }}" class="text-decoration-none" data-bs-toggle="tooltip" title="Kelola semua pembelian">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-shopping-cart fa-2x text-danger mb-3 animated-hover"></i>
                                    <h5 class="card-title">Kelola Pembelian</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Penjualan Card -->
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('penjualan.index') }}" class="text-decoration-none" data-bs-toggle="tooltip" title="Kelola semua penjualan">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-cash-register fa-2x text-info mb-3 animated-hover"></i>
                                    <h5 class="card-title">Kelola Penjualan</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-body i {
            transition: color 0.3s ease;
        }

        .card:hover .text-primary {
            color: #007bff;
        }

        .card:hover .text-success {
            color: #28a745;
        }

        .card:hover .text-warning {
            color: #ffc107;
        }

        .card:hover .text-danger {
            color: #dc3545;
        }

        .card:hover .text-info {
            color: #17a2b8;
        }

        .animated-hover {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover .animated-hover {
            transform: rotate(10deg) scale(1.1);
        }
    </style>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
@endsection
