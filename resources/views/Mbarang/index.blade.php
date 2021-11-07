@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Kumpulan Data Penjualan
@endsection
@section('content')
<div class="py-6">
    <div class="row mb-6">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="examples" class="mb-4">
                <h2>Data Penjualan</h2>
            </div>
            <div class="card">
                <ul class="nav nav-line-bottom" id="pills-tab-table" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-table-design-tab" data-bs-toggle="pill"
                            href="#pills-table-design" role="tab" aria-controls="pills-table-design"
                            aria-selected="true">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-table-html-tab" data-bs-toggle="pill" href="#pills-table-html"
                            role="tab" aria-controls="pills-table-html" aria-selected="false">HTML</a>
                    </li>
                </ul>
                <!-- Tab content -->
                <div class="tab-content p-4" id="pills-tabContent-table">
                    <div class="tab-pane tab-example-design fade show
                      active" id="pills-table-design" role="tabpanel" aria-labelledby="pills-table-design-tab">
                        <!-- Basic table -->
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Jumlah Terjual</th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $item => $key)
                                    <tr>
                                        <th scope="row">{{ $item + 1 }}</th>
                                        <td>{{ $key->nama_barang }}</td>
                                        <td>{{ $key->stok }}</td>
                                        <td>{{ $key->jumlah_terjual }}</td>
                                        <td>{{ $key->created_at }}</td>
                                        <td>{{ $key->jenis_barang }}</td>
                                        <td>
                                            <button type="submit" class="btn btn-outline-success my-1 btn-sm">
                                                <i data-feather="plus"></i>
                                            </button>

                                            <button type="submit" class="btn btn-outline-warning my-1 btn-sm">
                                                <i data-feather="edit"></i>
                                            </button>

                                            <button type=" submit" class="btn btn-outline-danger my-1 btn-sm"
                                                value="Delete">
                                                <i data-feather="trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
@endpush
@endsection
