<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover table-bordered">
        <thead class="table dark">
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pemain as $index => $pemain)
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$nama_pemain -> nama_pemain}}</td>
                <td>{{$no_punggung -> no_punggung}}</td>
                <td>{{$posisi -> posisi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>