@extends('layouts.admin.main')
@section('container')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Presensi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Presensi</li>
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
@endsection
