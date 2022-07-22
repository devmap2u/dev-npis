@extends('layouts.admin')

@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> --}}
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush

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
                <h3 class="text-themecolor m-b-0 m-t-0">Pengguna</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Pengguna</li>
                </ol>
            </div>

        </div>
                <button type="button" class="btn btn-success" onclick="window.location.href='/tambahpengguna'">Tambah +</button>
                <br/>
                <br/>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive">
                                <table class="table table-hover text-nowrap" id="table_pengguna">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">IC</th>
                                        {{-- <th scope="col">alamat</th> --}}
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
                                            {{-- <td>{{$row->address}}</td> --}}
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
                    </div>
                </div>
            </div>
        </div>
    <footer class="footer text-center">
    © 2017 Monster Admin by wrappixel.com
    </footer>
</div>

    @endsection

    @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> --}}
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            </body>
            <script>
                $( document ).ready(function() {
                    alert("test");
                });
             $('#table_pengguna').DataTable();
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
