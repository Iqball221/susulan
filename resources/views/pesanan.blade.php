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
    <th>Id </th>
    <th>Nama pelanggan </th>
    <th>nama barang </th>
    <th>qty</th>
    <th>tgl pesan</th>
    </tr>
        @foreach($pesanan as $data)
        <tr>
        <td>{{$data['id_pesanan']}}</td>
        <td>{{$data['nama_pelanggan']}}</td>
        <td>{{$data['nama_barang']}}</td>
        <td>{{$data['qty']}}</td>
        <td>{{$data['tgl_pesan']}}</td>
        
        </tr>
        @endforeach
    </ul>
</table>


</body>
</html>