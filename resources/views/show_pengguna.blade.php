@extends('layouts.admin')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <div class="contrainer">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="col-8">
                        <form action="/editpengguna/{{$data->id}}" method="post" enctype="multipart/form-data">
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
                                <select class="form-select" aria-label="Default select example" id="role" name="role">
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
