@extends('layouts.admin')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" >

@endpush

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

            <div class="contrainer">
                <button type="button" class="btn btn-success" onclick="window.location.href='/tambahpengguna'">Tambah +</button>
                <br/>
                <br/>
                <div class="row">
                    <table class="table table-bordered" id="table_pengguna">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">IC</th>
                            <th scope="col">alamat</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jawatan</th>
                            <th scope="col">Kementerian</th>
                            <th scope="col">Kumpulan</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $c = 1;
                            @endphp
                            @foreach( $data as $row)
                                <tr>
                                <th scope="row">{{$c++}}</th>
                                <td>{{$row->name}}</td>
                                <td>{{$row->ic}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->jawatan}}</td>
                                <td>{{$row->kementerian}}</td>
                                <td>{{$row->role}}</td>
                                <td>{{$row->created_at->format('d/m/Y')}}</td>
                                <td>
                                    <!-- <a href="/deletepengguna/{{$row->id}}" class="btn btn-danger" >Delete</a>-->
                                    <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}">Delete</a>
                                    <a href="/showpengguna/{{$row->id}}" class="btn btn-info " >Edit</a>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    @endsection

    @push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
            </body>
            <script>
              $(document).ready( function () {
                $('#table_pengguna').DataTable();
            } );
            $(".delete").click( function(){
                var pengguna_id = $(this).attr('data-id');

                const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location ="/deletepengguna/"+pengguna_id
                    //swalWithBootstrapButtons.fire(
                    //'Deleted!',
                    //'Your file has been deleted.',
                    //'success'
                    //)
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                    )
                }
                })
            });

            </script>


            @if ($message = Session::get('success'))
                <script>
                toastr.success('{{$message}}')
                </script>
            @endif
    @endpush
