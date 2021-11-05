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
    <th>Nama </th>
    <th>varian </th>
    <th>Harga beli</th>
    <th>harga jual</th>
    </tr>

        @foreach($barang as $data)
        <tr>
        <td>{{$data['id_barang']}}</td>
        <td>{{$data['nama']}}</td>
        <td>{{$data['varian']}}</td>
        <td>{{$data['harga_beli']}}</td>
        <td>{{$data['harga_jual']}}</td>

        </tr>
        @endforeach
    </ul>



</body>
</html>