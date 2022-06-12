@extends('layouts.master')
@section('title', 'Edit user')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card card-table">
                <div class="card-body booking_card">
                    <form action="{{ route('user.update', $data->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="mb-6">
                                    <div class="mb-2">
                                    <label for="name" class="form-label">Nama user</label>
                                    <input type="text" class="form-control " name="name" autocomplete="off" id="name" placeholder="Nama user" value="{{ old('name') ? old('name') : $data->name}}">
                                    @error('name')
                                        <span style="color:red; font-size:12px">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control " name="email" autocomplete="off" id="email" placeholder="Email" value="{{ old('email') ? old('email') : $data->email}}">
                                    @error('email')
                                        <span style="color:red; font-size:12px">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control " name="password" autocomplete="off" id="password" placeholder="Password" value="{{ old('password') }}">
                                    <p style="color: red">Kosongkan jika Tidak ingin merubah password</p>
                                    @error('password')
                                        <span style="color:red; font-size:12px">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="mb-2">
                                    <label for="roles" class="form-label">Level</label>
                                    <select name="roles" class="form-control">
                                        <option value="" disabled selected>-- Pilih --</option>
                                        <option value="ADMIN" {{ old('roles') && old('roles') == 'ADMIN' ? 'selected' : '' }}
                                        {{ $data->roles == 'ADMIN' ? 'selected' : '' }}
                                            >ADMIN
                                        </option>
                                        <option value="USER" {{ old('roles') && old('roles') == 'USER' ? 'selected' : '' }}
                                        {{ $data->roles == 'USER' ? 'selected' : '' }}
                                            >USER
                                        </option>
                                    </select>
                                    @error('roles')
                                        <span style="color:red; font-size:12px">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                            <button class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
