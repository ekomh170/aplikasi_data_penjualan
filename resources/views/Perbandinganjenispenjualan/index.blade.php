@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Menu Data Penjualan
@endsection
@section('content')
<div class="py-6">
    <div class="row mb-6">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="examples" class="mb-4">
                <h2>Perbandingan Jenis Data Penjualan</h2>
            </div>
            <div class="card">
                <div class="d-flex justify-content-around mt-3 mb-3 ms-3 me-3">
                    <div class="col-6 ms-4">
                        <form action="/perbandingan-penjualan" class="d-flex align-items-end">
                            <select id="selectOne" class="form-select" name="jenis_penjualan_id">
                                <option>Pilih Jenis Barang 1</option>
                                {{-- @foreach ($jenis_p as $jp)
                                <option value="{{ $jp->id }}">{{ $jp->jenis_penjualan }}
                                </option>
                                @endforeach --}}
                            </select>
                            <div class="ms-2 me-2">
                                <button type="submit" class="btn btn-dark">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 me-4">
                        <form action="/perbandingan-penjualan" class="d-flex align-items-end">
                            <select id="selectOne" class="form-select" name="jenis_penjualan_id">
                                <option>Pilih Jenis Barang 2</option>
                                {{-- @foreach ($jenis_p as $jp)
                                                        <option value="{{ $jp->id }}">{{ $jp->jenis_penjualan }}
                                </option>
                                @endforeach --}}
                            </select>
                            <div class="ms-2 me-2">
                                <button type="submit" class="btn btn-dark">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-around mt-3 mb-3 ms-3 me-3">
                    <div class="col-6 ms-4">
                        <div class="card" style="width: 30rem;">
                            <div class="card-body">
                                <h5 class="card-title">Jenis Data Barang 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>

                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ms-4">
                        <div class="card" style="width: 30rem;">
                            <div class="card-body">
                                <h5 class="card-title">Jenis Barang 2</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>

                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
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
