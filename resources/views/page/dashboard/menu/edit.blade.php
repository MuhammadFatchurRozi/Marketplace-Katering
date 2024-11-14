@extends('layouts.dashboardMain')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Data Karyawan /</span> Edit Data Karyawan
        </h4>
        <div class="col-lg-12 col-md-6">
            <form id="formAccountSettings" method="POST" action="{{ route('menu.update', $getMenu->id) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Hoverable Table rows -->
                <div class="card mt-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover table-bordered table-striped">
                            <thead class="text-center" style="vertical-align:middle; font-weight: bold; font-size: 15px;">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama Menu</th>
                                    <th rowspan="2">Kategori</th>
                                    <th rowspan="2">Harga</th>
                                    <th rowspan="2">Icon</th>
                                    <th rowspan="2">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="vertical-align:middle;">
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <input type="text" class="form-control" name="namaMenu"
                                            value="{{ $getMenu->nama }}" required>
                                    </td>
                                    <td>
                                        <select class="form-select" name="kategori" required>
                                            <option value="{{ $getMenu->kategori }}">{{ $getMenu->kategori }}</option>
                                            <option value="Makanan">Makanan</option>
                                            <option value="Snack">Snack</option>
                                            <option value="Minuman">Minuman</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="harga"
                                            value="{{ $getMenu->harga }}" required>
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/menu/' . $getMenu->icon) }}" alt="icon"
                                            style="width: 50px; height: 50px;" id="image">
                                        <input id="newImage" type="file" class="form-control" name="icon">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="deskripsi"
                                            value="{{ $getMenu->deskripsi }}" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Hoverable rows table -->
                <div class="d-flex justify-content-between">
                    <div class="mt-3 d-flex flex-wrap justify-content-start">
                        <button id="submit_button" type="submit" class="btn btn-primary me-2">Save changes</button>
                    </div>
                    {{-- <div class="mt-3 d-flex flex-wrap justify-content-end align-items-center">
                        <a href="{{ route('nilai_alternatifs.edit', $getMenu->id) }}"
                            class="btn btn-outline-warning me-2">Edit
                            Nilai Alternatif</a>
                        <a onclick="goBack()" class="btn btn-outline-secondary">Back</a>
                    </div> --}}
                </div>
            </form>
        </div>
    </div>
    <ul class="pagination justify-content-center mt-3"></ul>
    <!--/ Hoverable Table rows -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- Ajax change new image --}}
    <script>
        $(document).ready(function() {
            $('#newImage').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
