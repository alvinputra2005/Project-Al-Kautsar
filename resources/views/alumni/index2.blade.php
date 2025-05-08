<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ulasan Pengunjung - PPM Al Kautsar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        #hidden-button {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        .logo-pondok:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

    </style>
</head>
<body>

<div class="container">
    <div class="header text-center">
        <a href="{{ route('alumni.index') }}">
            <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar" class="logo-pondok" id="hidden-button">
        </a>
        <h2 class="mt-3">Daftar Alumni</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Kampus</th>
                <th>Angkatan</th>
                <th>Pekerjaan</th>
                <th>Bidang Keahlian</th>
                <th>Pengalaman</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumni as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kampus }}</td>
                <td>{{ $item->angkatan }}</td>
                <td>{{ $item->pekerjaan }}</td>
                <td>{{ $item->bidang_keahlian }}</td>
                <td>{{ $item->pengalaman }}</td>
                <td>{{ $item->contact }}</td>
                <td>
                    <!-- Tombol aksi di sini -->
                    <a href="{{ route('alumni.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('alumni.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-left mb-5 ml-4">
        <a href="{{ route('home') }}" class="btn btn-outline-primary">← Kembali ke Beranda</a>
    </div>
</div>

</body>
</html>