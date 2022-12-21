@extends('layouts.index')
@section('header')
    <div class="d-md-flex align-items-end">
        <div class="me-auto">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Family Day</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
            <h2 class="page-title mb-0 mt-2"></h2>

            <p class="lead mb-lg-0"></p>

        </div>
    </div>
@section('content')
    <div class="card pageCard">
        <div class="card-header pt-4 bg-white">
            <div class="row">

                <!-- Left toolbar -->
                <div class="col-md-6 d-flex gap-1 align-items-center ">
                    <div class="btn-group">
                        <a class="getReload" href=""><button class="btn btn-icon btn-outline-light text-muted p-1"><i
                                    class="la la-sync fs-5"></i></button></a>

                    </div>
                </div>
                <!-- END : Left toolbar -->

                <!-- Right Toolbar -->
                <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end ">
                    <div class="form-group d-flex">
                        <input type="text" placeholder="Cari..." class="form-control caridata" autocomplete="off"
                            value=""><button
                            class="btn btn-icon btn-bg-purple btn-sm p-1 ml-1 klikcari"><i
                                class="la la-search fs-5"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body pt-1">
            <div class="table-responsove">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                                <th>No Pembelian</th>
                                <th>Nama </th>
                                <th>Subscribe</th>
                                <th>Durasi</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                            <th class="text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $u)
                            <tr>
                                <td class="align-middle">{{ $u->no_pembelian }}</td>
                                <td class="align-middle">{{ $u->person_name }}</td>
                                <td class="align-middle">{{ $u->typesubscribe }}</td>
                                <td class="align-middle">{{ $u->durasi }}</td>
                                <td class="align-middle">{{ $u->total_bayar }}</td>
                                <td class="align-middle">{{ $u->status }}</td>
                            </td>
                                <td><a href="{{ route('verifikasi', $u->no_pembelian) }}"
                                            class="btn btn-bg-purple">Detail</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
