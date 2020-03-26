<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .header{
            width: 95%;
            margin: auto;
        }
        .body{
            margin-top: 3rem;
            text-align: center;
        }
        .body h3{
            margin-top: -1rem;
            padding: -10rem;
        }
        table {
            margin: 1rem auto;
            width: 80%;
        }
        table tr {
            padding: 10px;
        }
        table tr td p {
            font-size: 1em;
        }
        .head {
            width: 16rem;
        }
    </style>

</head>
<body>
    {{-- Header --}}
    <img src="{{asset('/img/form-sukses-bayar/header.PNG')}}" alt="form-bayar" class="header">
    {{-- Body --}}
    <hr>

    <div class="body">
        <h2>FORMULIR PENDAFTARAN PESERTA LOMBA ICE</h2>
        <h3>( INTERN COMPETITION OF ELEKTRO) 2020</h3>
    </div>

    <div class="form">
        <table>
            <tr>
                <td class="head"> <h3>Nama</h3> </td>
                <td> <p> : I Putu Surya Jayantara</p> </td>
            </tr>
            <tr>
                <td class="head"> <h3>NIM</h3> </td>
                <td> <p> : 1915323025</p> </td>
            </tr>
            <tr>
                <td class="head"> <h3>Kelas</h3> </td>
                <td> <p> : 2 MI A</p> </td>
            </tr>
            <tr>
                <td class="head"> <h3> Semester </h3> </td>
                <td> <p> : II </p> </td>
            </tr>
            <tr>
                <td class="head"> <h3>Jurusan/Prodi</h3> </td>
                <td> <p> : Teknik Elektro / Manajemen Informatika </p> </td>
            </tr>
            <tr>
                <td class="head"> <h3>Alamat</h3> </td>
                <td> <p> : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita incidunt numquam tempora labore rem fugit. </p> </td>
            </tr>
            <tr>
                <td class="head"> <h3>No Telpon (Whatsapp)</h3> </td>
                <td> <p> : 081231122231 </p> </td>
            </tr>
            <tr>
                <td class="head"> <h3>Jenis Makanan</h3> </td>
                <td> <p> : Vegetarian </p> </td>
            </tr>
        </table>
    </div>
</body>
</html>