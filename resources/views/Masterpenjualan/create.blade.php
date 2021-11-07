@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Form Data Penjualan
@endsection
@section('content')

<div class="row">
    <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
        <!-- Content -->
        <div class="docs-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="mb-7" id="intro">
                        <h1 class="mb-2">Pendataan Data Penjualan</h1>
                    </div>
                </div>
            </div>

            <!-- basic-forms -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- Card -->
                    <div class="card">
                        <ul class="nav nav-line-bottom " id="pills-tab-basic-forms" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-basic-forms-design-tab" data-bs-toggle="pill"
                                    href="#pills-basic-forms-design" role="tab" aria-controls="pills-basic-forms-design"
                                    aria-selected="true">Design</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-basic-forms-html-tab" data-bs-toggle="pill"
                                    href="#pills-basic-forms-html" role="tab" aria-controls="pills-basic-forms-html"
                                    aria-selected="false">HTML</a>
                            </li>
                        </ul>
                        <!-- Tab content -->
                        <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                            <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design"
                                role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                                <form>
                                    <!-- Input -->
                                    <div class="mb-3">
                                        <label class="form-label" for="textInput">Nama Barang</label>
                                        <input type="text" id="nama_barang" class="form-control"
                                            placeholder="Masukan Nama Barang" name="nama_barang">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="textInput">Jumlah Stok</label>
                                        <input type="number" id="stok" class="form-control"
                                            placeholder="Masukan Jumlah Stok" name="stok">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="textInput">Jumlah Terjual</label>
                                        <input type="number" id="jumlah_terjual" class="form-control"
                                            placeholder="Masukan Jumlah Stok" name="jumlah_terjual">
                                    </div>

                                    <!-- Select Option -->
                                    <div class="mb-3">
                                        <label class="form-label" for="selectOne">Jenis Barang</label>
                                        <select id="selectOne" class="form-select">
                                            <option>Masukan Jenis Barang</option>
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-outline-success">Submit</button>
                                    <a href="" class="btn btn-outline-warning">Kumpulan Data
                                        Penjualan</a>
                                </form>
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
