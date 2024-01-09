@extends('layouts.app')

@section('title', 'New Register')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Register</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Register</a></div>
                    <div class="breadcrumb-item">New Register</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Register</h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="text"
                                    class="form-control @error('npwp')
                                    is-invalid
                                @enderror"
                                    name="npwp">
                                @error('npwp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    name="nama">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="text"
                                    class="form-control @error('no_ktp')
                                    is-invalid
                                @enderror"
                                    name="no_ktp">
                                @error('no_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Alamat KTP</label>
                                <input type="text"
                                    class="form-control @error('alamat_ktp')
                                    is-invalid
                                @enderror"
                                    name="alamat_ktp">
                                @error('alamat_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tempat, Tanggal dan Lahir</label>
                                <input type="text"
                                    class="form-control @error('ttl')
                                    is-invalid
                                @enderror"
                                    name="ttl">
                                @error('ttl')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Alamat E-Mail</label>
                                <input type="text"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No Handphone Aktif</label>
                                <input type="text"
                                    class="form-control @error('no_hp')
                                    is-invalid
                                @enderror"
                                    name="no_hp">
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No Telpon Perusahaan Aktif</label>
                                <input type="text"
                                    class="form-control @error('no_telp')
                                    is-invalid
                                @enderror"
                                    name="no_telp">
                                @error('no_telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="no_npwp">No NPWP</label>
                                <select class="form-control" id="no_npwp" name="no_npwp">
                                    <option value="Orang Pridadi">Orang Pribadi</option>
                                    <option value="Badan">Badan</option>
                                    <option value="BUT">BUT</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="kependudukan">Kependudukan</label>
                                <select class="form-control" id="kependudukan" name="kependudukan">
                                    <option value="Dalam Negeri">Dalam Negeri</option>
                                    <option value="Luar Negeri">Luar Negeri</option>
                                </select>
                            </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
