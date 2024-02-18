@extends('master', ['title' => ''])
@section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Editing Page</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
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
                                        <h3 class="card-title">Edit Data</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{route('karyawan.update', $inventory->id)}}" method="POST" enctype="multipart/form-data">

                                            @csrf
                                            @method('PUT')

                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Item</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control fc-datepicker" placeholder="Ketik Nama Karyawan Disini" name="item" value="{{old('item', $karyawan->name)}}" required oninvalid="this.setCustomValidity('Mohon Mengisi Bagian Nama Karyawan')" oninput="this.setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label for="inputEmail3" class="col-md-3 form-label">Qty</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" name="qty" placeholder="Ketik Keterangan Disini" value="{{old('qty', $inventory->qty)}}" required oninvalid="this.setCustomValidity('Mohon Mengisi Bagian Quantity')" oninput="this.setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label for="inputPassword3" class="col-md-3 form-label">Stok</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" name="stok" placeholder="Ketik Sisa Stok Disini" value="{{old('stok', $inventory->stok)}}" required oninvalid="this.setCustomValidity('Mohon Mengisi Bagian Stok Disini')" oninput="this.setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="mb-0 mt-4 row justify-content-end">
                                                <div class="col-md-9">
                                                    <button class="btn btn-success" type="submit" onclick="return confirm('Anda sudah yakin dengan data diatas?')">Update</button>
                                                </div>
                                            </div>
                                        </form>
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
