@extends('layouts.dashboardMain')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Data Category /</span> Edit Data Category
        </h4>
        <div class="col-lg-12 col-md-6">
            <form id="formAccountSettings" method="POST" action="{{ route('categories.update', $categories->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Hoverable Table rows -->
                <div class="card mt-3">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover table-bordered table-striped">
                                    <thead class="text-center"
                                        style="vertical-align:middle; font-weight: bold; font-size: 15px;">
                                        <tr>
                                            <th rowspan="2">Sebelum</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center" style="vertical-align:middle;">
                                        <tr>
                                            <td>
                                                <img src="{{ Storage::url($categories->icon) }}" alt=""
                                                    width="250px">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="" class="form-label">Nama Category</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    value="{{ $categories->name }}" readonly>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover table-bordered table-striped">
                                    <thead class="text-center"
                                        style="vertical-align:middle; font-weight: bold; font-size: 15px;">
                                        <tr>
                                            <th rowspan="2">Kategori Baru</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center" style="vertical-align:middle;">
                                        <tr>
                                            <td>
                                                <label for="name">Nama Category Baru</label>
                                                <input type="text" name="name" class="form-control" id="name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <labe for="formFile" class="form-label">Icon</labe>
                                                <input class="form-control" type="file" id="formFile" name="icon" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Hoverable rows table -->
                <div class="d-flex justify-content-between">
                    <div class="mt-3 d-flex flex-wrap justify-content-start">
                        <button id="submit_button" type="submit" class="btn btn-primary me-2">Save changes</button>
                    </div>
                    <div class="mt-3 d-flex flex-wrap justify-content-end align-items-center">
                        {{-- <a href="{{ route('nilai_alternatifs.edit', $data_karyawan->id) }}"
                            class="btn btn-outline-warning me-2">Edit
                            Nilai Alternatif</a>
                        <a onclick="goBack()" class="btn btn-outline-secondary">Back</a> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
    <ul class="pagination justify-content-center mt-3"></ul>
    <!--/ Hoverable Table rows -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection
