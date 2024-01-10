@extends('layouts.admin.main')
@section('container')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Anggota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Anggota</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('/tambah-anggota') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" name="nama_anggota" class="form-control"
                                            id="exampleInputEmail1" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kelas</label>
                                        <input type="text" name="kelas" class="form-control" id="exampleInputPassword1"
                                            placeholder="Kelas">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Ekstrakulikuler</label>
                                        <input type="text" name="ekskul_role" class="form-control"
                                            id="exampleInputPassword2" placeholder="Ekstrakulikuler">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="col-5">Nama Lengkap</th>
                                            <th class="col-2">Kelas</th>
                                            <th class="col-3">Ekstrakulikuler</th>
                                            <th class="col-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $item)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_anggota }}</td>
                                                <td>{{ $item->kelas }}</td>
                                                <td>{{ $item->ekskul_role }}</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <a href="{{ url('/ubah-anggota', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline btn btn-primary">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        @method('DELETE')
                                                        <a href="{{ url('/hapus-anggota', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline btn btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
        </section>
    </div>


    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
