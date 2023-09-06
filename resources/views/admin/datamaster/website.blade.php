@extends('admin.layout.layout')
@section('title', 'Menejemen Website')
@section('content')

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Menejemen Website</h4>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-round ml-auto " data-toggle="modal"
                                        data-target="#modalCreate">
                                        <i class="fa fa-plus"></i>Website</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Judul Website</th>
                                                <th>Foto</th>
                                                <th>Deskripsi</th>
                                                <th>No Telp</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Google Maps</th>
                                                <th>Sosmed Fb</th>
                                                <th>Sosmed Twitter</th>
                                                <th>Sosmed Instagram</th>
                                                <th>Sosmed Youtube</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($website as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->judul_website }}</td>
                                                    <td><img src=" {{ asset('fotowebsite/' . $item->foto) }}" alt=""
                                                            width="60px" height="40px"></td>
                                                    <td>{{ $item->deskripsi }}</td>
                                                    <td>{{ $item->no_telp }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->google_map }}</td>
                                                    <td>{{ $item->sosmed_fb }}</td>
                                                    <td>{{ $item->sosmed_twitter }}</td>
                                                    <td>{{ $item->sosmed_instagram }}</td>
                                                    <td>{{ $item->sosmed_youtube }}</td>
                                                    <td>
                                                        <a href=# data-target="#formModalEdit{{ $item->id }}"
                                                            data-toggle="modal" class="btn btn-ss btn-primary"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="{{ asset('admin/delete-website/' . $item->id) }}" button
                                                            type="button" class="btn btn-danger"
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
                    <h5 class="modal-title">Create Data Website</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="create-website" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="nama" required>
                        </div>
                        <div class="form-group">
                            <label>Judul Website</label>
                            <input type="text" class="form-control" name="judul_website" placeholder="judul website"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" class="form-control" cols="5" rows="5" name="deskripsi" placeholder="deskripsi"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto"required>
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="number" class="form-control" name="no_telp" placeholder="no telp" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="email" required>
                        </div>



                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" class="form-control" cols="5" rows="5" name="alamat" placeholder="alamat"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Google Map</label>
                            <textarea type="text" class="form-control" cols="5" rows="5" name="google_map" placeholder="google map"
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Sosmed Fb</label>
                            <input type="text" class="form-control" name="sosmed_fb" placeholder="sosmed fb" required>
                        </div>
                        <div class="form-group">
                            <label>Sosmed Twitter</label>
                            <input type="text" class="form-control" name="sosmed_twitter" placeholder="sosmed twitter"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Sosmed Instagram</label>
                            <input type="text" class="form-control" name="sosmed_instagram"
                                placeholder="sosmed instagram" required>
                        </div>
                        <div class="form-group">
                            <label>Sosmed Youtube</label>
                            <input type="text" class="form-control" name="sosmed_youtube"
                                placeholder="sosmed youtube" required>
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
    @foreach ($website as $item)
        <form action="edit-website" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="formModalEdit{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Edit Data Website</h5>
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
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ $item->nama }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Judul Website</label>
                                    <input type="judul_website" class="form-control" name="judul_website"
                                        value="{{ $item->judul_website }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea type="text" class="form-control" cols="5" items="5" name="deskripsi" required>{{ $item->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="foto_berita">Foto</label>
                                    <input type="file" class="form-control" id="foto_berita" name="foto">
                                    <input class=" form-control" type="hidden" name="gambarLama"
                                        value="{{ $item->foto }}">
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="number" class="form-control" name="no_telp"
                                        value="{{ $item->no_telp }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $item->email }}" required>
                                </div>



                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea type="text" class="form-control" cols="5" items="5" name="alamat" required>{{ $item->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Google Map</label>
                                    <textarea type="text" class="form-control" cols="5" items="5" name="google_map" required>{{ $item->google_map }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Sosmed Fb</label>
                                    <input type="text" class="form-control"
                                        name="sosmed_fb"value="{{ $item->sosmed_fb }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Sosmed Twitter</label>
                                    <input type="text" class="form-control" name="sosmed_twitter"
                                        value="{{ $item->sosmed_twitter }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Sosmed Instagram</label>
                                    <input type="text" class="form-control" name="sosmed_instagram"
                                        value="{{ $item->sosmed_instagram }}"required>
                                </div>
                                <div class="form-group">
                                    <label>Sosmed Youtube</label>
                                    <input type="text" class="form-control" name="sosmed_youtube"
                                        value="{{ $item->sosmed_youtube }}" required>
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
