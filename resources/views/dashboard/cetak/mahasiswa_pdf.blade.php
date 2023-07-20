<!DOCTYPE html>
<html>

<head>
    <title>{{ $mahasiswa->nim }}-{{ $mahasiswa->nama }} (Bebas Masalah)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    {{-- Header --}}
    <center>
        <h5>KEMENTRIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI</h5>
        <h5>POLITEKNIK NEGERI BANJARMASIN</h5>
        <p>Jl. Brig Jend Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin,<br>
            Kalimantan Selatan 70124</p>
        <br />
        <hr>
        <br />
        <p>SURAT PERNYATAAN BEBAS MASALAH</p>
        <br />
    </center>
    {{-- Header --}}

    {{-- Body --}}
    <table border="0">
        <tr>
            <td>Nama</td>
            <td>: {{ $mahasiswa->nama }}</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>: {{ $mahasiswa->nim }}</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>: {{ $mahasiswa->prodi->nama }}</td>
        </tr>
    </table>

    <br/>
    <br/>

    <div class="justify-text">
        <p>Dalam rangka memenuhi persyaratan akademik dan administratif, kami menyampaikan bahwa Anda,
            {{ $mahasiswa->nama }} dengan NIM {{ $mahasiswa->nim }}, Program Studi {{ $mahasiswa->prodi->nama }},
            telah dinyatakan bebas masalah dari segala kewajiban dan sanksi yang berkaitan dengan kebijakan
            Politeknik Negeri Banjarmasin. Surat ini merupakan bukti bahwa Anda telah menyelesaikan semua tanggung
            jawab yang diharuskan sebagai mahasiswa</p>
    </div>

    <br />
    {{-- Body --END --}}

    {{-- Footer --}}
    <div class="footer">
        <p>Banjarmasin, {{ now()->format('Y-m-d') }}</p>
        <br />
        <p>Direktur,<br>
        Politeknik Negeri Banjarmasin</p>
        <br />
        <br />
        <p style="text-decoration: underline;">Joni Riyadi SST, MT.</p>
    </div>
    {{-- Footer --END --}}

</body>

</html>

<style>
    .justify-text {
        text-align: justify;
    }

    .justify-text {
            text-align: justify;
        }

        /* Atur tata letak footer */
        .footer {
            position: absolute;
            right: 0;
        }

        hr {
            height: 1.5px; /* Atur tinggi garis */
            background-color: darkgray; /* Atur warna garis */
            border: none; /* Hapus garis bawaan */
        }
</style>
