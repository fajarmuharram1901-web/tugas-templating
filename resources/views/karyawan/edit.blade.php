<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container" style="max-width: 700px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-center"><h4>Edit Data Karyawan</h4></div>
            <div class="card-body">
                <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama', $karyawan->nama) }}">
                        @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Alamat Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $karyawan->email) }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan', $karyawan->jabatan) }}">
                        @error('jabatan') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <button type="submit" class="btn btn-warning w-100 mb-2 fw-bold">Update Data</button>
                    <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary w-100">Batal & Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>