<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <span class="navbar-brand">Start Bootstrap</span>
        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-outline-light">Logout</button>
        </form>
    </nav>

    <div class="container mt-4">
        <h1>Dashboard</h1>
        <p class="text-muted">Dashboard Admin</p>
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">Data Karyawan</div>
                    <div class="card-footer">
                        <a class="text-white small" href="{{ route('karyawan.index') }}">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">Data Transaksi</div>
                    <div class="card-footer">
                        <a class="text-white small" href="#">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>