@extends('admin.layout.layout')
@section('title', 'Data Galeri')
@section('content')

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Galeri</h4>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-round ml-auto " data-toggle="modal"
                                        data-target="#modalCreate">
                                        <i class="fa fa-plus"></i>Galeri</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Judul Foto</th>
                                                <th>Lokasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($galeri as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><img src=" {{ asset('fotogaleri/' . $item->foto) }}" alt=""
                                                            width="60px" height="40px"></td>
                                                    <td>{{ $item->judul_foto }}</td>
                                                    <td>{{ $item->lokasi }}</td>


                                                    <td>
                                                        <a href=# data-target="#formModalEdit{{ $item->id }}"
                                                            data-toggle="modal" class="btn btn-xs btn-primary"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="{{ asset('admin/delete-galeri/' . $item->id) }}" button
                                                            type="button" class="btn btn-xs btn-danger"
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
                    <h5 class="modal-title">Create Data Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="/admin/create-galeri" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto"required>
                        </div>
                        <div class="form-group">
                            <label>Judul Foto</label>
                            <input type="text" class="form-control" name="judul_foto" placeholder="judul foto" required>
                        </div>

                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" required>
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
    @foreach ($galeri as $item)
        <form action="edit-galeri" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="formModalEdit{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Edit Data Galeri</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id"
                                    value="{{ $item->id }}">
                                <div class="form-group">
                                    <label for="foto_berita">Foto</label>
                                    <input type="file" class="form-control" id="foto_berita" name="foto">
                                    <input class=" form-control" type="hidden" name="gambarLama"
                                        value="{{ $item->foto }}">
                                </div>
                                <div class="form-group">
                                    <label>Judul Foto</label>
                                    <input type="text" class="form-control" name="judul_foto"
                                        value="{{ $item->judul_foto }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi"
                                        value="{{ $item->lokasi }}" required>
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
