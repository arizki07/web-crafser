@extends('layouts.app')
@section('adminCrafser')
    @include('components.alert')
    <style>
        td.cuspad0 {
            padding-top: 3px;
            padding-bottom: 3px;
            padding-right: 13px;
            padding-left: 13px;
        }

        td.cuspad1 {
            text-transform: uppercase;
        }

        td.cuspad2 {
            /* padding-top: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding-bottom: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding-right: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding-left: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin-top: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin-bottom: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin-right: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin-left: 5px; */
        }

        .unselectable {
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #cc0000;
            font-weight: bolder;
        }
    </style>
    <div class="page">

        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <h2 class="page-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-virus-off">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 3l18 18" />
                                    <path d="M8.469 8.46a5 5 0 0 0 7.058 7.084" />
                                    <path d="M16.913 12.936a5 5 0 0 0 -5.826 -5.853" />
                                    <path d="M12 7v-4" />
                                    <path d="M11 3h2" />
                                    <path d="M15.536 8.464l2.828 -2.828" />
                                    <path d="M17.657 4.929l1.414 1.414" />
                                    <path d="M17 12h4" />
                                    <path d="M21 11v2" />
                                    <path d="M18.364 18.363l-.707 .707" />
                                    <path d="M12 17v4" />
                                    <path d="M13 21h-2" />
                                    <path d="M8.465 15.536l-2.829 2.828" />
                                    <path d="M6.343 19.071l-1.413 -1.414" />
                                    <path d="M7 12h-4" />
                                    <path d="M3 13v-2" />
                                    <path d="M5.636 5.637l-.707 .707" />
                                </svg>
                                {{ $judul }}

                            </h2>
                            <div class="page-pretitle mt-2">
                                <ol class="breadcrumb" aria-label="breadcrumbs">
                                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                            Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-snowflake" width="44"
                                            height="41" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M14 21v-5.5l4.5 2.5" />
                                            <path d="M10 21v-5.5l-4.5 2.5" />
                                            <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                                            <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                                            <path d="M10 3v5.5l-4.5 -2.5" />
                                            <path d="M14 3v5.5l4.5 -2.5" />
                                            <path d="M12 11l1 1l-1 1l-1 -1z" />
                                        </svg> --}}
                                            {{ $judul }}
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                {{-- Tombol-tombol status project --}}
                                <a href="#" target="_blank" class="btn btn-primary float-end" data-bs-toggle="modal"
                                    data-bs-target="#modal-add">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                        <path
                                            d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                                    </svg>
                                    Tambah project
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card card-xl border-success shadow rounded">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-success">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div style="overflow-x: auto;">
                                        <table id="example"
                                            class="display table table-vcenter card-table table-sm table-bordered table-hover"
                                            style="width:100%; font-family: 'Trebuchet MS', Helvetica, sans-serif;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">OPSI</th>
                                                    <th class="text-center">NAMA</th>
                                                    <th class="text-center">PROJECT</th>
                                                    <th class="text-center">DESKRIPSI</th>
                                                    <th class="text-center">TANGGAL MULAI</th>
                                                    <th class="text-center">TANGGAL SELESAI</th>
                                                    <th class="text-center">STATUS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($project as $item)
                                                    <tr class="text-center">
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                                data-bs-target="#modal-edit{{ $item->id }}"
                                                                data-bs-toggle="modal"
                                                                class="btn btn-info btn-sm btn-icon edit-btn"><i
                                                                    class="fa-solid fa-fw fa-edit"></i>
                                                            </a>
                                                            <form id="deleteForm{{ $item->id }}"
                                                                action="/project/destroy/{{ $item->id }}" method="POST"
                                                                class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="btn btn-danger btn-sm btn-icon"
                                                                    onclick="confirmDelete(event, {{ $item->id }})">
                                                                    <i class="fa-solid fa-fw fa-trash-can"></i>
                                                                </button>
                                                            </form>

                                                            <form
                                                                action="{{ route('project.update-status', ['id' => $item->id]) }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                <button type="submit" name="status" value="Progres"
                                                                    class="btn btn-info btn-sm btn-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-parking-circle">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M10 16v-8h3.334c.92 0 1.666 .895 1.666 2s-.746 2 -1.666 2h-3.334" />
                                                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                                    </svg>

                                                                </button>
                                                                <button type="submit" name="status" value="Complete"
                                                                    class="btn btn-success btn-sm btn-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path d="M5 12l5 5l10 -10" />
                                                                    </svg>

                                                                </button>
                                                                <button type="submit" name="status" value="Hold"
                                                                    class="btn btn-danger btn-sm btn-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor"
                                                                        class="icon icon-tabler icons-tabler-filled icon-tabler-hospital-circle">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M12 2c5.523 0 10 4.477 10 10a10 10 0 0 1 -20 0l.004 -.28c.148 -5.393 4.566 -9.72 9.996 -9.72m2 5a1 1 0 0 0 -1 1v2.999h-2v-2.999a1 1 0 0 0 -.883 -.993l-.117 -.007a1 1 0 0 0 -1 1v8a1 1 0 0 0 2 0v-3.001h2v3.001a1 1 0 0 0 .883 .993l.117 .007a1 1 0 0 0 1 -1v-8a1 1 0 0 0 -1 -1" />
                                                                    </svg>

                                                                </button>
                                                                <button type="submit" name="status" value="Cancel"
                                                                    class="btn btn-secondary btn-sm btn-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="currentColor"
                                                                        class="icon icon-tabler icons-tabler-filled icon-tabler-circle-x">
                                                                        <path stroke="none" d=" M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" />
                                                                    </svg>

                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td>{{ $item->klien->nama }}</td>
                                                        <td>{{ $item->nama_project }}</td>
                                                        <td>
                                                            <a type="button" href="#"
                                                                class="btn btn-outline-primary btn-sm btn-icon"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deskripsi-{{ $item->id }}">
                                                                <i class="fa-solid fa-fw fa-eye"></i>
                                                            </a>
                                                        </td>
                                                        <td>{{ $item->tanggal_mulai }}</td>
                                                        <td>{{ $item->tanggal_selesai }}</td>
                                                        <td>
                                                            @if ($item->status == 'COMPLETE')
                                                                <span class="badge bg-green text-white">Complete</span>
                                                            @elseif ($item->status == 'HOLD')
                                                                <span class="badge bg-red text-white">Hold</span>
                                                            @elseif ($item->status == 'CANCEL')
                                                                <span class="badge bg-azure text-white">Cancel</span>
                                                            @elseif ($item->status == 'PROGRES')
                                                                <span class="badge bg-blue text-white">Progres</span>
                                                            @else
                                                                <span class="badge bg-orange text-white">Pending</span>
                                                            @endif
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
    </div>

    {{-- Modal add --}}
    <div class="modal modal-blur fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('store.project') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <select class="form-control border border-dark" name="id_klien" id="id_klien"
                                        required>
                                        <option selected value="">--- Pilih nama klien ---</option>
                                        @foreach ($klien as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Project</label>
                                    <input type="text" class="form-control" name="nama_project"
                                        placeholder="Isi nama project" value="{{ old('nama_project') }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" class="form-control"
                                        value="{{ old('tanggal_mulai') }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" class="form-control"
                                        value="{{ old('tanggal_selesai') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary ms-auto" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal add --}}

    @foreach ($project as $item)
        <div class="modal modal-blur fade" id="modal-edit{{ $item->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('update.project', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Klien</label>
                                        <select class="form-control border border-dark" name="id_klien" id="id_klien"
                                            required>
                                            <option value="">--- Pilih nama klien ---</option>
                                            @foreach ($klien as $k)
                                                <option value="{{ $k->id }}"
                                                    @if ($k->id == $item->id_klien) selected @endif>{{ $k->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <input type="text" class="form-control" name="nama_project"
                                            placeholder="Isi nama project"
                                            value="{{ old('nama_project', $item->nama_project) }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Mulai</label>
                                        <input type="date" name="tanggal_mulai" class="form-control"
                                            value="{{ old('tanggal_mulai', $item->tanggal_mulai) }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Selesai</label>
                                        <input type="date" name="tanggal_selesai" class="form-control"
                                            value="{{ old('tanggal_selesai', $item->tanggal_selesai) }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label">Deskripsi</label>
                                        <textarea class="form-control" rows="3" name="deskripsi" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</a>
                            <button class="btn btn-primary ms-auto" type="submit">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal modal-blur fade" id="deskripsi-{{ $item->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="row">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div>
                                                <label class="form-label">Deskripsi</label>
                                                <textarea class="form-control" rows="3" name="deskripsi" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
