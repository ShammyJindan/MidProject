@extends('master', ['title' => ''])
@section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Halaman Edit Data Karyawan</h1>
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
                                        <form class="form-horizontal" action="{{route('karyawan.update', $karyawan->id)}}" method="POST" enctype="multipart/form-data">

                                            @csrf
                                            @method('PUT')

                                            <div class="row mb-4">
                                                <label for="inputName" class="col-md-3 form-label">Nama Karyawan</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="namekaryawan" class="form-control" value="{{old('item', $karyawan->name)}}" pattern=".{5,20}" required placeholder="Input nama karyawan" name="name"
                                                    oninvalid="if (this.value.trim() === '') { this.setCustomValidity('Mohon mengisi bagian nama'); } else if (this.value.trim().length < 5 || this.value.trim().length > 20) { this.setCustomValidity('Nama harus memiliki minimal 5 karakter dan maksimal 20 karakter'); }"
                                                    oninput="if (this.value.trim() === '') { this.setCustomValidity('Mohon mengisi bagian nama'); } else if (this.value.trim().length < 5 || this.value.trim().length > 20) { this.setCustomValidity('Nama harus memiliki minimal 5 karakter dan maksimal 20 karakter'); } else if (this.value.trim().length >= 5 || this.value.trim().length <= 20) { this.setCustomValidity(''); }">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Umur</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="ageKaryawan" class="form-control" value="{{old('item', $karyawan->age)}}" name="age" min="21" required placeholder="Ketik Umur Disini"
                                                    oninvalid="if (this.value.trim() === '') { this.setCustomValidity('Mohon mengisi bagian umur'); } else {this.setCustomValidity('Umur harus lebih besar dari 20 tahun'); }"
                                                    oninput="if (this.value.trim() === '') { this.setCustomValidity('Mohon mengisi bagian umur'); } else if (this.value < 21) {this.setCustomValidity('Umur harus lebih besar dari 20 tahun'); } else {this.setCustomValidity(''); } ">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Alamat</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="alamatKaryawan" class="form-control" value="{{old('item', $karyawan->alamat)}}" name="alamat" placeholder="Ketik Alamat Disini" pattern=".{10,40}" required
                                                    oninvalid="if (this.value.trim() === '') {this.setCustomValidity('Mohon mengisi bagian alamat'); } else if(this.value.trim().length < 10 || this.value.trim().length > 40) {this.setCustomValidity('Alamat harus memiliki minimal 10 karakter dan maksimal 40 karakter'); }"
                                                    oninput="if (this.value.trim() === '') {this.setCustomValidity('Mohon mengisi bagian alamat'); } else if(this.value.trim().length < 10 || this.value.trim().length > 40) {this.setCustomValidity('Alamat harus memiliki minimal 10 karakter dan maksimal 40 karakter'); } else {this.setCustomValidity(''); }">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="inputPassword3" class="col-md-3 form-label">Nomor Telefon</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="telpKaryawan" class="form-control" value="{{old('item', $karyawan->telp)}}" name="telp" placeholder="Ketik Nomor Telefon Disini" pattern="08[0-9]{7,10}" required
                                                    oninvalid="if (this.value.trim() === '') {this.setCustomValidity('Mohon mengisi bagian nomor telefon'); } else if(this.value.trim().length < 9 || this.value.trim().length > 12) {this.setCustomValidity('Nomor telefon hanya memiliki minimal 9 angka dan maksimal 12 angka'); }"
                                                    oninput="if (this.value.trim() === '') {this.setCustomValidity('Mohon mengisi bagian nomor telefon'); } else if (!/^08/.test(this.value.trim())) { this.setCustomValidity('Nomor telefon harus dimulai dengan 08...'); } else if(this.value.trim().length < 9 || this.value.trim().length > 12) {this.setCustomValidity('Nomor telefon hanya memiliki minimal 9 angka dan maksimal 12 angka'); } else {this.setCustomValidity(''); }">
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
