<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Barang</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data barang</h1>
    </center>
    <ul>
    <table border='1'>
    <tr>
    <th>id </th>
    <th>nama</th>
    <th>jk </th>
    <th>alamat </th>
    <th>kode pos </th>
    <th>kota </th>
    <th>tanggal lahir </th>

     </tr>
        @foreach($pembeli as $data)
        <tr>
        <td>{{$data['id_barang']}}</td>
        <td>{{$data['nama']}}</td>
        <td>{{$data['jk']}}</td>
        <td>{{$data['alamat']}}</td>
        <td>{{$data['kode_pos']}}</td>
        <td>{{$data['kota']}}</td>
        <td>{{$data['tgl_lahir']}}</td>
        </tr>
        @endforeach
    </ul>
</table>


</body>
</html>