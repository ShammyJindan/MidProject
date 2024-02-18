@extends('master', ['title' => ''])
@section('content')

            <!-- Row -->
            <!-- PAGE-HEADER -->
            <div class="page-header">
                {{-- @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('success')}}

                </div> --}}
                <h1 class="page-title">Daftar Karyawan</h1>
                <div class="breadcrumb-style2">
                    <ol class="breadcrumb1">
                        <li class="breadcrumb-item1"><a href="javascript:void(0)">Karyawan</a></li>
                        <li class="breadcrumb-item1 active" aria-current="page">Index</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <!-- Row -->
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                            <div class="btn-list btn-list-icon">
                            <a href="{{route('karyawan.create')}}" class="btn btn-pill btn-success"><i class="fe fe-plus me-2"></i>Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Telephone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($karyawan as $kp)
                                        <tr>
                                            <td>{{$kp->name}}</td>
                                            <td>{{$kp->age}}</td>
                                            <td>{{$kp->alamat}}</td>
                                            <td>{{$kp->telp}}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('apakah anda yakin ?');" action="{{ route('karyawan.destroy', $kp->id)}}" method="POST">
                                                    <a href="{{ route('karyawan.edit', $kp->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
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
            <!-- /Row -->
            </div>
            <!-- CONTAINER CLOSED -->
            </div>
            </div>
            <!--app-content closed-->
</div>
@endsection
