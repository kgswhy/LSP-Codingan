<!DOCTYPE html>
<html>

<head>
    <title>Laporan PDF Pengaduan SMK Telkom Jakarta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            padding-top: 50px;
        }

        .table {
            background-color: #fff;
        }

        .table th,
        .table td {
            border-color: #dee2e6;
        }

        .table th {
            background-color: #007bff;
            color: #fff;
        }

        .table td {
            background-color: #f8f9fa;
        }

        h5 {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center mt-3 mb-4">Laporan PDF Pengaduan SMK Telkom Jakarta</h5>
                <div class="table-responsive">
                    <table class='table table-bordered'>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Pelapor</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Isi Laporan</th>
                                <th scope="col">Tanggapan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduan as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->kode_pengaduan }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->judul_laporan }}</td>
                                <td>{{ $item->jenis_pengaduan }}</td>
                                <td>{{ $item->laporan }}</td>
                                <td>{{ $item->tanggapan->tanggapan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
