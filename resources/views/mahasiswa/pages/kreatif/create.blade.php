@extends('mahasiswa.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Kegiatan Kreatifitas dan Wirausaha Warga Asrama</h3>
    </div>
    <div class="card card-primary">
        <div class="card-header"><h4>Tambah Data Kreatifitas dan Wirausaha</h4></div>

        <div class="card-body pt-1">
            <form method="POST" action="/mahasiswa/kreatif/store" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6" hidden>
                        <div class="form-group">
                            <label for="nama_warga">Nama Warga:</label><span
                                    class="text-danger">
                            <input value="{{Auth::user()->name}}" readonly type="text" class="form-control" name="nama_warga">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="komponen"
                                   class="control-label">Komponen Kurikulum Kreativitas dan Kewirausahaan:</label><span
                                    class="text-danger">
                            <select name="komponen" class="form-control {{ $errors->has('komponen') ? ' is-invalid': '' }}">
                                <option value="">-Pilih Kompetensi-</option>
                                <option value="Mengikuti pelatihan kreativitas dan kewirausahaan">Mengikuti pelatihan kreativitas dan kewirausahaan</option>
                                <option value="Mengikuti kegiatan mentoring">Mengikuti kegiatan mentoring</option>
                                <option value="Membaca buku, majalah, internet dll tentang kewirausahaan">Membaca buku, majalah, internet dll tentang kewirausahaan</option>
                                <option value="Mengikuti forum ceramah atau diskusi kewirausahaan">Mengikuti forum ceramah atau diskusi kewirausahaan</option>
                                <option value="Melakukan tugas dalam kegiatan usaha asrama">Melakukan tugas dalam kegiatan usaha asrama</option>
                                <option value="Menulis proposal usaha">Menulis proposal usaha</option>
                                <option value="Menghasilkan karya kreatif (video, grafis, dll)">Menghasilkan karya kreatif (video, grafis, dll)</option>
                                <option value="Memiliki keberanian untuk memulai usaha">Memiliki keberanian untuk memulai usaha</option>
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('komponen') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="asrama"
                                   class="control-label">Asrama:</label><span
                                    class="text-danger">
                            <select name="asrama" class="form-control {{ $errors->has('asrama') ? ' is-invalid': '' }}">
                                <option value="Asrama Sunan Gunung Jati">Asrama Sunan Gunung Djati</option>
                                <option value="Asrama Sunan Giri">Asrama Sunan Giri</option>
                                <option value="Asrama Wali Songo">Asrama Wali Songo</option>
                                <option value="Asrama Darul Quran Fatahillah">Daarul Qur'an Fatahillah</option>
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('asrama') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kegiatan">Nama Kegiatan:</label><span
                                    class="text-danger">
                            <input id="kegiatan" type="text"
                                   class="form-control{{ $errors->has('kegiatan') ? ' is-invalid' : '' }}"
                                   placeholder="Masukan Nama Kegiatan" name="kegiatan" tabindex="1"
                                   value="{{ old('kegiatan') }}"
                                   required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('kegiatan') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="waktu" class="control-label">Waktu Kegiatan
                                :</label><span
                                    class="text-danger">
                            <input id="waktu" type="date"
                                   class="form-control{{ $errors->has('waktu') ? ' is-invalid': '' }}"
                                   placeholder="Masukan Waktu Kegiatan" name="waktu" tabindex="2" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('waktu') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tempat"
                                   class="control-label">Tempat Kegiatan:</label><span
                                    class="text-danger">
                            <input id="tempat" type="text" placeholder="Masukan Tempat Kegiatan"
                                   class="form-control{{ $errors->has('tempat') ? ' is-invalid': '' }}"
                                   name="tempat" tabindex="2">
                            <div class="invalid-feedback">
                                {{ $errors->first('tempat') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keterangan"
                                   class="control-label">Uraian Kegiatan:</label><span
                                    class="text-danger">
                                <textarea id="keterangan" type="keterangan" placeholder="Keterangan Kegiatan"
                                        class="form-control{{ $errors->has('keterangan') ? ' is-invalid': '' }}"
                                        name="keterangan" tabindex="2"></textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('keterangan') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="file"
                                   class="control-label">Lampiran File: (max. file 15 MB)</label><span class="text-danger">*</span>
                                <input id="file" type="file" placeholder="Keterangan Kegiatan"
                                        class="form-control{{ $errors->has('file') ? ' is-invalid': '' }}"
                                        name="file" tabindex="2">
                            <div class="invalid-feedback">
                                {{ $errors->first('file') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection