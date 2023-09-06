@extends('admin.layout.layout')
@section('title', 'Data Tentangkami')
@section('content')

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Tentangkami</h4>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-round ml-auto " data-toggle="modal"
                                        data-target="#modalCreate">
                                        <i class="fa fa-plus"></i>Tentangkami</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Desakripsi</th>
                                                <th>Fasilitas 1</th>
                                                <th>Fasilitas 2</th>
                                                <th>Fasilitas 3</th>
                                                <th>Fasilitas 4</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($tentangkami as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->judul }}</td>
                                                    <td>{{ $item->deskripsi }}</td>
                                                    <td>{{ $item->fasilitas_1 }}</td>
                                                    <td>{{ $item->fasilitas_2 }}</td>
                                                    <td>{{ $item->fasilitas_3 }}</td>
                                                    <td>{{ $item->fasilitas_4 }}</td>
                                                    <td><img src=" {{ asset('fototentangkami/' . $item->foto) }}"
                                                            alt="" class="rounded-circle" width="60px"
                                                            height="60px"></td>
                                                    <td>
                                                        <a href=# data-target="#formModalEdit{{ $item->id }}"
                                                            data-toggle="modal" class="btn btn-xs btn-primary"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="{{ asset('admin/delete-tentangkami/' . $item->id) }}"
                                                            button type="button" class="btn btn-xs btn-danger"
                                                            onClick="return confirm('Yakin akan menghapus data ini!')"></button><i
                                                                class="fa fa-trash"></i></a>
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
        </div>

    </div>
    <!-- Page content -->

    {{-- Modal Tambah Data --}}

    <div class="modal fade bd-example-modal-lg" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Create Data Tentangkami</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="/admin/create-tentangkami" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" class="form-control" cols="5" rows="5" name="deskripsi" placeholder="deskripsi"
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <label>fasilitas_1</label>
                            <input type="text" class="form-control" name="fasilitas_1" placeholder="fasilitas 1"
                                required>
                        </div>

                        <div class="form-group">
                            <label>fasilitas_2</label>
                            <input type="text" class="form-control" name="fasilitas_2" placeholder="fasilitas 2"
                                required>
                        </div>

                        <div class="form-group">
                            <label>fasilitas_3</label>
                            <input type="text" class="form-control" name="fasilitas_3" placeholder="fasilitas 3"
                                required>
                        </div>

                        <div class="form-group">
                            <label>fasilitas_4</label>
                            <input type="text" class="form-control" name="fasilitas_4" placeholder="fasilitas 4"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto"required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>


    {{-- End Modal Tambah Data --}}

    {{-- Modal Edit Data --}}
    @foreach ($tentangkami as $item)
        <form action="edit-tentangkami" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="formModalEdit{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Edit Data Tentangkami</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id"
                                    value="{{ $item->id }}">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="judul"
                                        value="{{ $item->judul }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea type="text" class="form-control" cols="5" items="5" name="deskripsi" required>{{ $item->deskripsi }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Fasilitas 1</label>
                                    <input type="text" class="form-control" name="fasilitas_1"
                                        value="{{ $item->fasilitas_1 }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Fasilitas 2</label>
                                    <input type="text" class="form-control" name="fasilitas_2"
                                        value="{{ $item->fasilitas_2 }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Fasilitas 3</label>
                                    <input type="text" class="form-control" name="fasilitas_3"
                                        value="{{ $item->fasilitas_3 }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Fasilitas 4</label>
                                    <input type="text" class="form-control" name="fasilitas_4"
                                        value="{{ $item->fasilitas_4 }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="foto_berita">Foto</label>
                                    <input type="file" class="form-control" id="foto_berita" name="foto">
                                    <input class=" form-control" type="hidden" name="gambarLama"
                                        value="{{ $item->foto }}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
    {{-- End Modal Edit Data --}}

@endsection
<!-- End content -->
