@extends('admin.layout.layout')
@section('title', 'Data Layanankami')
@section('content')

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Layanankami</h4>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-round ml-auto " data-toggle="modal"
                                        data-target="#modalCreate">
                                        <i class="fa fa-plus"></i>Layanankami</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($layanankami as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>

                                                    <td>{{ $item->deskripsi }}</td>
                                                    <td>
                                                        <a href=# data-target="#formModalEdit{{ $item->id }}"
                                                            data-toggle="modal" class="btn btn-xs btn-primary"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="{{ asset('admin/delete-layanankami/' . $item->id) }}"
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
                    <h5 class="modal-title">Create Data Layanankami</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="/admin/create-layanankami" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" class="form-control" cols="5" rows="5" name="deskripsi" placeholder="deskripsi"
                                required></textarea>
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
    @foreach ($layanankami as $item)
        <form action="edit-layanankami" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="formModalEdit{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Edit Data Layanankami</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id"
                                    value="{{ $item->id }}">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $item->nama }}"
                                        required>
                                </div>


                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea type="text" class="form-control" cols="5" items="5" name="deskripsi" required>{{ $item->deskripsi }}</textarea>
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
