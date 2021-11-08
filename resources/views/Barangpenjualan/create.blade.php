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
                        <h1 class="mb-2">Tambah Data Barang Penjualan</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- Card -->
                    <div class="card">
                        <!-- Tab content -->
                        <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                            <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design"
                                role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                                <form action="/barang-penjualan" method="POST">
                                    @csrf
                                    <!-- Input -->
                                    <div class="mb-3">
                                        @error('nama_barang')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label" for="textInput">Nama Barang</label>
                                        <input type="text" id="nama_barang" class="form-control"
                                            placeholder="Masukan Nama Barang" name="nama_barang">
                                    </div>
                                    @error('jenis_barang')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="mb-3">
                                        <label class="form-label" for="selectOne">Jenis
                                            Barang</label>
                                        <select id="selectOne" class="form-select" name="jenis_penjualan_id">
                                            <option>Pilih Jenis Barang</option>
                                            @foreach ($jenis_p as $jp)
                                            <option value="{{ $jp->id }}">{{ $jp->jenis_penjualan }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-outline-success">Submit</button>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col-3">
                                            <a href="{{ route('jenis-penjualan.index') }}"
                                                class="btn btn-outline-warning text-end">Kembali</a>
                                        </div>
                                    </div>
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
