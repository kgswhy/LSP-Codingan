@extends('backend.layout.app')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit User</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{ route('update.user', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') ?? $user->name }}" name="name" placeholder="Name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>No Induk</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control @error('nis') is-invalid @enderror"
                                        value="{{ old('nis') ?? $user->nis }}" name="nis" placeholder="nis">
                                    @error('nis')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ $user->email }}" name="email" placeholder="Email" readonly>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Kelas</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                                        value="{{ old('kelas') ?? $user->kelas }}" name="kelas" placeholder="kelas" readonly>
                                    @error('kelas')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Tempat Lahir</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        value="{{ old('tempat_lahir') ?? $user->tempat_lahir }}" name="tempat_lahir"
                                        placeholder="Tempat Lahir">
                                    @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        value="{{ old('tanggal_lahir') ?? $user->tanggal_lahir }}" name="tanggal_lahir"
                                        placeholder="Tanggal Lahir">
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Role</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="role" value="user" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') ?? $user->password }}" name="password" placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>
@endsection
