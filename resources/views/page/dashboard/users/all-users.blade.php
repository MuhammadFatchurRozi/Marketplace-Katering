@extends('layouts.dashboardMain')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Course /</span> Sub&nbsp;Categories
        </h4>

        <div class="col-lg-12 col-md-6">
            <div class="d-flex justify-content-between mb-3">
                <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal"
                        data-bs-target="#modalcreate">Tambah Data</button>
                    <form action="{{ route('subcategories.index') }}" method="GET">
                        <div class="input-group input-group-merge ms-2">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input type="text" class="form-control" name="search" placeholder="Cari Nama Category"
                                value="{{ request()->query('search') }}">
                            <button type="submit" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </form>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#modalCenter">
                        Import Excel
                    </button>
                    <a href="#" class="btn btn-outline-info ms-2">Export Excel</a>
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
                                    <th rowspan="2">Name</th>
                                    <th rowspan="2">Email</th>
                                    <th rowspan="2">No Telp</th>
                                    <th rowspan="2">Occupation</th>
                                    <th rowspan="2">Role</th>
                                    <th rowspan="2">Avatar</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="vertical-align:middle;">
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->no_telp }}</td>
                                        <td>{{ $user->occupation }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <img src="{{ $user->avatar }}" alt="avatar" class="rounded-circle"
                                                width="65" />
                                        </td>
                                        <td>
                                            <a href="{{ route('subcategories.edit', $user->id) }}" class="btn btn-warning">
                                                <i class='bx bxs-edit'></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('subcategories.destroy', $user->id) }}" method="POST"
                                                onsubmit="confirmDelete(event,this)">
                                                {{ csrf_field() }}
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
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
                    {{-- <div class="d-flex justify-content-between p-3">
                        <div class="d-flex justify-content-start">
                            Showing
                            {{ $data->firstItem() }}
                            to
                            {{ $data->lastItem() }}
                            of
                            {{ $data->total() }}
                        </div>
                        <div class="d-flex justify-content-end p-2">
                            <nav aria-label="Page navigation ">
                                <ul class="pagination pagination">
                                    @if (count($data) == 0)
                                    @else
                                        @if ($data->onFirstPage())
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"
                                                    aria-disabled="true">&laquo;</a>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $data->previousPageUrl() }}"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                        @endif

                                        @for ($i = 1; $i <= $data->lastPage(); $i++)
                                            <li class="page-item {{ $data->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        @if ($data->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <ul class="pagination justify-content-center mt-3"></ul>
    {{-- modal import excel --}}
    {{-- <form method="post" action="{{ route('flash-sale.import') }}" enctype="multipart/form-data">
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Import Excel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pilih file excel</label>
                            <input class="form-control" type="file" id="formFile" name="file"
                                accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required />
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
    </form> --}}

    {{-- modal create Data Category --}}
    {{-- <form method="POST" action="{{ route('subcategories.store') }}">
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
                                <label for="select" class="form-label">Category</label>
                                <select name="category_id" class="form-select" required>
                                    <option disabled selected>Pilih Category</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nama" class="form-label">Sub Category</label>
                                <input class="form-control" placeholder="Nama Category" type="text" id="nama"
                                    name="name" autofocus required />
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
    </form> --}}

    <script>
        function confirmDelete(event, form) {
            event.preventDefault();
            if (confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
                form.submit();
            }
        }
    </script>
@endsection
