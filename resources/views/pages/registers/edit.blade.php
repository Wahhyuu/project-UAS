@extends('layouts.app')

@section('title', 'Edit Register')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Register</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Register</a></div>
                    <div class="breadcrumb-item">Edit Register</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('register.update', $register) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Register</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="text"
                                    class="form-control @error('npwp')
                                    is-invalid
                                @enderror"
                                    name="npwp" value="{{ $register->npwp }}">
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
                                    name="nama" value="{{ $register->nama }}">
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
                                    name="no_ktp" value="{{ $register->no_ktp }}">
                                @error('no_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat KTP</label>
                                <input type="alamat_ktp"
                                    class="form-control @error('alamat_ktp')
                                    is-invalid
                                @enderror"
                                    name="alamat_ktp" value="{{ $register->alamat_ktp }}">
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
                                    name="ttl" value="{{ $register->ttl }}">
                                @error('ttl')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control @error('jenis_kelamin')
                                        is-invalid
                                    @enderror" name="jenis_kelamin" value="{{ $register->jenis_kelamin }}"
                                    id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Laki-Laki">Laki-laki</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                                @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat E-Mail</label>
                                <input type="text"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email" value="{{ $register->email }}">
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
                                    name="no_hp" value="{{ $register->no_hp }}">
                                @error('ttl')
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
                                    name="no_telp" value="{{ $register->no_telp }}">
                                @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No NPWP</label>
                                <select class="form-control @error('no_npwp')
                                        is-invalid
                                    @enderror" name="no_npwp" value="{{ $register->no_npwp }}"
                                    id="no_npwp" name="no_npwp">
                                    <option value="Orang Pribadi ">Orang Pribadi</option>
                                    <option value="Badan">Badan</option>
                                    <option value="BUT">BUT</option>
                                </select>
                                @error('no_npwp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kependudukan</label>
                                <select class="form-control @error('kependudukan')
                                        is-invalid
                                    @enderror" name="kependudukan" value="{{ $register->kependudukan }}"
                                    id="kependudukan" name="kependudukan">
                                    <option value="Dalam Negeri">Dalam Negeri</option>
                                    <option value="Luar Negeri">Luar Negeri</option>
                                </select>
                                @error('kependudukan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
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
