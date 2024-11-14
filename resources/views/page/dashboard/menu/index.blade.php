@extends('layouts.dashboardMain')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Merchant /</span> Menu
        </h4>

        <div class="col-lg-12 col-md-6">
            <div class="d-flex justify-content-between mb-3">
                <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal"
                        data-bs-target="#modalcreate">Tambah Data</button>
                    {{-- <form action="{{ route('menu.index') }}" method="GET">
                        <div class="input-group input-group-merge ms-2">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input type="text" class="form-control" name="search" placeholder="Cari Menu"
                                value="{{ request()->query('search') }}">
                            <button type="submit" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </form> --}}
                </div>
            </div>

            <div class="mt-3 mb-3">
                <!-- Hoverable Table rows -->
                <div class="card mt-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover table-bordered table-striped">
                            <thead class="text-center" style="vertical-align:middle;">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama Menu</th>
                                    <th rowspan="2">Kategori</th>
                                    <th rowspan="2">Harga</th>
                                    <th rowspan="2">Icon</th>
                                    <th rowspan="2">Deskripsi</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="vertical-align:middle;">
                                @forelse ($getMenu as $menu)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $menu->nama }}</td>
                                        <td>{{ $menu->kategori }}</td>
                                        <td>{{ $menu->harga }}</td>
                                        <td><img src="{{ asset('storage/menu/' . $menu->icon) }}" alt="icon"
                                                style="width: 50px; height: 50px;">
                                        </td>
                                        <td>{{ Str::limit($menu->deskripsi, 20) }}</td>
                                        <td>
                                            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="confirmDelete(event, this.form)">Delete</button>
                                            </form>
                                        </td>
                                    @empty
                                        <td colspan="12" class="text-center">
                                            Data Kosong
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{-- pagination --}}
                    <div class="d-flex justify-content-between p-3">
                        <div class="d-flex justify-content-start">
                            Showing
                            {{ $getMenu->firstItem() }}
                            to
                            {{ $getMenu->lastItem() }}
                            of
                            {{ $getMenu->total() }}
                        </div>
                        <div class="d-flex justify-content-end p-2">
                            <nav aria-label="Page navigation ">
                                <ul class="pagination pagination">
                                    @if (count($getMenu) == 0)
                                    @else
                                        @if ($getMenu->onFirstPage())
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"
                                                    aria-disabled="true">&laquo;</a>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $getMenu->previousPageUrl() }}"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                        @endif

                                        @for ($i = 1; $i <= $getMenu->lastPage(); $i++)
                                            <li class="page-item {{ $getMenu->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link"
                                                    href="{{ $getMenu->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        @if ($getMenu->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $getMenu->nextPageUrl() }}"
                                                    aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"
                                                    aria-disabled="true">&raquo;</a>
                                            </li>
                                        @endif
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="pagination justify-content-center mt-3"></ul>

    {{-- modal create Data Category --}}
    <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
        <div class="modal fade" id="modalcreate" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Create Data Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="namaMenu" class="form-label">Nama Menu</label>
                                <input class="form-control" placeholder="Nama Menu" type="text" id="namaMenu"
                                    name="namaMenu" autofocus required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" id="kategori" name="kategori" required>
                                    <option selected disabled value="">Pilih Kategori</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Snack">Snack</option>
                                    <option value="Minuman">Minuman</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="harga" class="form-label">Harga</label>
                                <input class="form-control" placeholder="Harga" type="number" id="harga"
                                    name="harga" required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" placeholder="Deskripsi" id="deskripsi" name="deskripsi" required></textarea>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Icon</label>
                                    <input class="form-control" type="file" id="formFile" name="icon" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function confirmDelete(event, form) {
            event.preventDefault();
            if (confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
                form.submit();
            }
        }
    </script>

    <script>
        function search() {
            var search = document.getElementById('search').value;
            window.location.href = "{{ route('menu.index') }}?search=" + search;
        }
    </script>
@endsection
