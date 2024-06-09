@extends('backend.layouts.main')

@section('container')
<form method="post" action="/lapangan-backend" enctype="multipart/form-data">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label " >Nama Lapangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name='nama' id="nama" value="{{ old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Lapangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name='lokasi' id="lokasi" value="{{ old('lokasi')}}">
                    @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="file_upload" class="form-label">Gambar</label>
                <img id="file-preview" class="img-fluid col-sm-6 mb-3 d-block" height="100">
                <input type="file" class="form-control @error('file_upload') is-invalid @enderror" name="file_upload" id="file-upload">
                @error('file_upload')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>    

            <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='keterangan' id="keterangan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
    <script>
        const input = document.getElementById('file-upload');
        const previewPhoto = () => {
            const file = input.files;
            if (file) {
                const fileReader = new FileReader();
                const preview = document.getElementById('file-preview');
        fileReader.onload = function (event) {
                    preview.setAttribute('src', event.target.result);
                }
                fileReader.readAsDataURL(file[0]);
            }
        }
        input.addEventListener("change", previewPhoto);
      </script>
        <!-- AKHIR FORM -->
@endsection          
    