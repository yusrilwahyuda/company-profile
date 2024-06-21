@extends('layouts.layout')

@section('content')
<style>
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color: #fff;
    margin-bottom: 3rem; /* Margin bawah untuk mb-5 (sesuaikan dengan ukuran yang diinginkan) */
}

/* Styling untuk card body */
.card-body {
    padding: 20px;
}

.animated-hr {
    border: 0;
    height: 4px;
    background: linear-gradient(to right, green 0%, yellow 100%);
    background-size: 200% 100%;
    animation: moveHr 3s linear forwards;
    width: 100%;
    margin: auto;
}

@keyframes moveHr {
    0% {
        background-position: 100% 0;
    }
    100% {
        background-position: 0% 0;
    }
}

.widget.widget-nav-menu ul li a {
    display: block;
    padding: 10px 20px 10px 18px;
    position: relative;
    background-color: #fff;
    z-index: 2;
    font-weight: 500;
    font-size: 18px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    text-decoration: none;
    border-bottom: 1px solid #e8ecef;
}

li {
    text-align: left;
}

ol, ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.widget.widget-nav-menu ul li {
    position: relative;
    overflow: hidden;
    z-index: 2;
}

.widget.widget-nav-menu ul li a {
    display: block;
    position: relative;
    /* z-index: 2; */
    color: black; /* Warna teks default */
    transition: color 0.3s ease-in-out; /* Transisi warna teks */
}

.widget.widget-nav-menu ul li a::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    transition: left 0.3s ease-in-out;
    background: linear-gradient(90deg, #1c8452, #d8c616);
    z-index: -1;
    border-top-right-radius: 20px;
    /* border-bottom-right-radius: 20px; */
}

.widget.widget-nav-menu ul li:hover a::before,
.widget.widget-nav-menu ul li.active a::before {
    left: 0;
}

.widget.widget-nav-menu ul li:hover a,
.widget.widget-nav-menu ul li.active a {
    color: white; /* Warna teks ketika dihover atau aktif */
}

</style>

<div class="row">
    <div class="col-sm-8">  
        <div class="card mb-5">
            <div class="card-body">
    <h1>Permodalan</h1>
    <h1>PT. Jamkrida NTB Syariah</h1>
    <hr class="animated-hr">
    <br>
    <p style='text-align: justify'>Sesuai Akta Pendirian nomor 24 tanggal 15 Oktober 2012 Modal Dasar Perseroan ditetapkan sebesar Rp. 75.000.000.000,- (Tujuh Puluh Lima Milyar Rupiah) terdiri dari 75.000,- lembar saham dengan nilai masing-masing lembar saham sebesar Rp. 1.000.000,- (Satu Juta Rupiah).<br>Dari modal Dasar Perseroan tersebut sampai dengan 31 Desember 2023 telah disetor oeh Pemegang Saham sebesar Rp. 32.800.000.000,- (Tiga Puluh Dua Milyar delapan ratus juta Rupiah) dengan rincian sebagai berikut:</p>
    
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>  
            <th scope='col'>Kepemilikan</th>                             
            <th scope="col">Jumlah (Rp)</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pemerintah Provinsi NTB</td>
                <td>27.000.000.000,-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pemerintah Kota Mataram</td>
                <td>1.000.000.000,-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pemerintah Lombok Barat</td>
                <td>1.000.000.000,-</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pemerintah Lombok Tengah</td>
                <td>1.000.000.000,-</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pemerintah Kabupaten Bima</td>
                <td>1.800.000.000,-</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pemerintah Kota Bima</td>
                <td>1.000.000.000,-</td>
            </tr>
            <tr>
                <td colspan ='2'><center><strong>Total Keseluruhan</strong></center></td>
                <td><strong>32.800.000.000,-</strong></td>
            </tr>
        </tbody>
        
    </table>
    </div></div></div>
    <div class="col-sm-4">
        <aside class="widget widget-nav-menu">
        <ul class="widget-menu">
            <li class="active"><a href="javascript:void(0)">Link Terkait</a></li>
            <li class="text-capital"><a href="/latar_belakang">Latar Belakang</a></li>
            <li class="text-capital"><a href="/kepemilikan">Kepemilikan</a></li>
            <li class="text-capital"><a href="/visi-misi">Visi dan Misi</a></li>
            <li class="text-capital"><a href="/struktur">Struktur Organisasi</a></li>
        </ul>
        </aside>
    </div>
</div>

@endsection