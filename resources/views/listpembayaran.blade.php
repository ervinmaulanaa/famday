@extends('layouts.index')
@section('header')
@section('content')
    <div class="card pageCard">
        <div class="card-header pt-4 bg-white">
            <div class="row">

                <!-- Left toolbar -->
                <!-- END : Left toolbar -->

                <!-- Right Toolbar -->
                <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end ">
                    <div class="form-group d-flex">
                        <input type="text" placeholder="Cari..." class="form-control caridata" autocomplete="off"
                            value="<?=$user?>"><button
                            class="btn btn-icon btn-bg-purple btn-sm p-1 ml-1 klikcari"><i
                                class="la la-search fs-5"></i></button>
                    </div>
                </div>
                <!-- END : Right Toolbar -->

            </div>
        </div>

        <div class="card-body pt-1">
            <div class="table-responsove">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama / Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $u)
                            <tr>
                                <td><img src="{{ Avatar::create(strtoupper($u->person_name))->setDimension(32)->setFontSize(16)->toBase64() }}"
                                        class="mr-2 va-none">
                                    <a class="btn-link ml-1 d-inline-block" href="#">
                                        <span class="fw-bold text-dark">{{ $u->person_name }}</span><br>
                                        <span class="text-muted fs-9">{{ $u->person_email }}</span>
                                    </a>
                                </td>
                                <td class="align-middle">{{ $u->person_phone }}</td>
                                <td class="align-middle {{ $u->person_role == 'admin' ? 'fw-bold text-dark' : '' }}">
                                    {{ $u->person_role == 'admin' ? 'Administrator' : 'Registered User' }}</td>
                                <td class="fs-6 align-middle">
                                    <div class="badge d-block bg-success">{{ $u->person_status }}</div>

                                </td>
                                <td class="text-right align-middle">
                                    <div class="toolbar-end">
                                        <div class="dropdown">
                                            <a class="btn btn-icon p-1 btn-xs" href="javascript:void(0);" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="las la-ellipsis-h"></i></a>

                                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                                <li><a class="dropdown-item" href="javascript:void(0);" tipe="edit"><i
                                                            class="la la-edit"></i> Edit
                                                        User</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);" tipe="change"><i
                                                            class="la la-key"></i> Change
                                                        Password</a></li>
                                                {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                                <textarea class="d-none datanya">{{ $u }}</textarea>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection