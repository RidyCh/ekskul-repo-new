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
        @foreach ($data as $a)
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
                            <form action="{{ url('/ubah-jadwal', $a->id) }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" name="ekskul_role" class="form-control" placeholder="Atur Tanggal">
                                    </div>
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
                    </div>
                </div>
        </section>
        @endforeach
    </div>
@endsection
