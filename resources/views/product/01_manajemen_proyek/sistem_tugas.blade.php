@extends('layouts.app')
@section('adminCrafser')
    <!-- Page header -->
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
                    <div class="row row-deck row-cards">
                        <div class="col-12">
                            <div class="card card-md">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-primary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                            <path d="M10 10l.01 0" />
                                            <path d="M14 10l.01 0" />
                                            <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <img src="{{ asset('assets/static/crafser.jpg') }}" alt=""
                                                width="300px" height="300px">
                                        </div>
                                        <div class="col-9">
                                            <h3 class="h1">WEB CRAFSER CIREBON</h3>
                                            <div class="markdown text-secondary">
                                                <p>
                                                    Sistem tugas untuk jasa pembuatan website di Web Crafser dirancang untuk
                                                    mempermudah pengelolaan proyek dan tugas-tugas yang terkait. Sistem ini
                                                    memungkinkan manajer proyek untuk membuat, mengedit, dan menghapus
                                                    proyek serta menetapkan tugas-tugas spesifik kepada anggota tim.
                                                </p>
                                                <p>
                                                    Setiap tugas dilengkapi dengan deskripsi, tenggat waktu, dan status
                                                    (Pending, In Progress, Completed), sehingga memudahkan pemantauan
                                                    progres dan penyelesaian tugas. Sistem ini juga menyediakan fitur
                                                    notifikasi untuk tugas-tugas yang mendekati tenggat waktu, memastikan
                                                    semua anggota tim tetap terinformasi dan proyek dapat diselesaikan tepat
                                                    waktu.
                                                </p>
                                                <p>
                                                    Dengan sistem ini, Web Crafser dapat meningkatkan efisiensi kerja dan
                                                    kualitas layanan yang diberikan kepada klien.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
