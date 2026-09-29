<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container" style="max-width: 700px;">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white text-center"><h4>Tambah Karyawan Baru</h4></div>
            <div class="card-body">
                <form action="{{ route('karyawan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama..." value="{{ old('nama') }}">
                        @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Alamat Email</label>
                        <input type="email" name="email" class="form-control" placeholder="contoh@email.com" value="{{ old('email') }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Misal: Staff IT" value="{{ old('jabatan') }}">
                        @error('jabatan') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <button type="submit" class="btn btn-success w-100 mb-2">Simpan Data</button>
                    <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary w-100">Batal & Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>