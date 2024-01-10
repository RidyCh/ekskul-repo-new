@extends('layouts.admin.main')
@section('container')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jadwal</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Jadwal</li>
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
                            <form action="{{ url('/tambah-jadwal') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Ekskul</label>
                                        <input type="date" name="tanggal_ekskul" class="form-control"
                                            id="exampleInputEmail1" placeholder="Atur Tanggal">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control" id="exampleInputPassword1"
                                            placeholder="lokasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Jam Mulai</label>
                                        <input type="time" name="jam_mulai" class="form-control"
                                            id="exampleInputPassword2" placeholder="Jam Mulai">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Jam Selesai</label>
                                        <input type="time" name="jam_selesai" class="form-control"
                                            id="exampleInputPassword2" placeholder="Jam Selesai">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Status</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="Ada"
                                                value="Ada">
                                            <label class="form-check-label" for="Ada">Ada</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="Tidak"
                                                value="Tidak">
                                            <label class="form-check-label" for="Tidak">Tidak</label>
                                        </div>
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
                                            <th class="col-5">Tanggal Ekskul</th>
                                            <th class="col-2">Lokasi</th>
                                            <th class="col-3">Jam Mulai</th>
                                            <th class="col-3">Jam Selesai</th>
                                            <th class="col-3">Status</th>
                                            <th class="col-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $item)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->tanggal_ekskul }}</td>
                                                <td>{{ $item->lokasi }}</td>
                                                <td>{{ $item->jam_mulai }}</td>
                                                <td>{{ $item->jam_selesai }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <a href="{{ url('/ubah-jadwal', $item->id) }}"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline btn btn-primary">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        @method('DELETE')
                                                        <a href="{{ url('/hapus-jadwal', $item->id) }}"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline btn btn-danger">
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
