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
                            <li class="breadcrumb-item active">Edit Anggota</li>
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
                        @foreach ($data as $item)
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('/ubah-anggota', $item->id) }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" name="nama_anggota" class="form-control"
                                            id="exampleInputEmail1" value="{{ $item->nama_anggota }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kelas</label>
                                        <input type="text" name="{{ $item->kelas }}" class="form-control" id="exampleInputPassword1"
                                            value="Kelas">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Ekstrakulikuler</label>
                                        <input type="text" name="ekskul_role" class="form-control"
                                            id="exampleInputPassword2" value="{{ $item->ekskul_role }}" disabled readonly>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
