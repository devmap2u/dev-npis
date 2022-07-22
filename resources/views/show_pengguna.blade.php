@extends('layouts.admin')


@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Tambah Pengguna</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pengguna</a></li>
                    <li class="breadcrumb-item active">Tambah Pengguna</li>
                </ol>
            </div>
        </div>

            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <form action="/editpengguna/{{$data->id}}" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="ic" class="form-label">IC</label>
                                <input type="text" class="form-control" id="ic" name="ic" value="{{ $data->ic }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $data->address }}">
                            </div>
                            <div class="mb-3">
                                <label for="telefon" class="form-label">Telefon</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}">
                            </div>
                            <div class="mb-3">
                                <label for="emel" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $data->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="jawatan" class="form-label">Jawatan</label>
                                <input type="text" class="form-control" id="jawatan" name="jawatan" value="{{ $data->jawatan }}">
                            </div>
                            <div class="mb-3">
                                <label for="kementerian" class="form-label">Jabatan/Kementerian</label>
                                <input type="text" class="form-control" id="kementerian" name="kementerian" value="{{ $data->kementerian }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNama" class="form-label">Kumpulan</label>
                                <select class="form-control form-control-line" aria-label="Default select example" id="role" name="role">
                                    <option value="{{ $data->role }}">{{ $data->role }}</option>
                                    <option value="1">Pengguna</option>
                                    <option value="99">Pentadbir</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}

</div>

<footer class="footer text-center">
    © 2017 Monster Admin by wrappixel.com
</footer>

</div>

@endsection
