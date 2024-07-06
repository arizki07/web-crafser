@extends('layouts.app')
@section('adminCrafser')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
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
                    @foreach ($users as $item)
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-4 text-center">
                                    <?php
                                    $username = $item->username;
                                    $role = $item->role;
                                    
                                    if ($username === 'Rizki') {
                                        $avatarUrl = asset('assets/static/avatars/rizki.jpg');
                                    } elseif ($username === 'Dimas') {
                                        $avatarUrl = asset('assets/static/avatars/dimas.jpg');
                                    } elseif ($username === 'Syarif') {
                                        $avatarUrl = asset('assets/static/avatars/syarif.jpg');
                                    } else {
                                        $avatarUrl = asset('assets/static/avatars/default.jpg'); // Default avatar
                                    }
                                    ?>
                                    <span class="avatar avatar-xl mb-3 rounded"
                                        style="background-image: url('{{ $avatarUrl }}')"></span>
                                    <h3 class="m-0 mb-1"><a href="#">{{ $item->name }}</a></h3>
                                    <div class="text-secondary">{{ $item->role }}</div>
                                    <div class="mt-3">
                                        @if ($role === 'OWNER')
                                            <span class="badge bg-purple-lt">Owner</span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst(strtolower($role)) }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="mailto:{{ $item->email }}" class="card-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                            <path d="M3 7l9 6l9 -6" />
                                        </svg>
                                        Email
                                    </a>
                                    <a href="tel:{{ $item->phone }}" class="card-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                        </svg>
                                        Call
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
