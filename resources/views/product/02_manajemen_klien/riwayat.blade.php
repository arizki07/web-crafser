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
                                                    <th class="text-center">STATUS</th>

                                                    <th class="text-center">NAMA</th>
                                                    <th class="text-center">PROJECT</th>
                                                    <th class="text-center">DESKRIPSI</th>
                                                    <th class="text-center">TANGGAL MULAI</th>
                                                    <th class="text-center">TANGGAL SELESAI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($project as $item)
                                                    <tr class="text-center">
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

    @foreach ($project as $item)
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
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label">Deskripsi</label>
                                        <textarea class="form-control" rows="3" name="deskripsi" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
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
