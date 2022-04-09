<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Village</title>
    <link rel="stylesheet" href="/css/index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <style>
    .bg-artikel {
      color: white;
      background-image: url("/Gambar/artikel-tana-toraja.png");
      height: 400px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    #img-value {
      display: none;
    }
    .row{
      margin: 20px;
    }
    .card {
      padding: 25px;
    }
  </style>
  <body>
    <!--Navbar Atas-->
    <p id="img-value">{{ $package->gambar }}</p>
    @include('tourpackage.partials.navbar')
    <div class="row">
      <div class="col-6">
        <div class="container-fluid bg-artikel" id="bg-artikel"></div>
        <p style="margin-top: 20px;">{!! $package->deskripsi !!}</p>
      </div>
      <div class="col-6"><div class="container">
        <div class="card shadow">
            <h2 style="margin-bottom: 20px">{{ $package->nama_paket }}</h2>
            <p><b>Nama Travel:</b> {{ $package->nama }}</p>
            <p><b>Durasi:</b> {{ $package->durasi }}</p>
            <p><b>Harga:</b> {{ $package->harga }}</p>
            <p><b>Kegiatan Wisata:</b></p>
            {!! $package->kegiatan_wisata !!}
      
            <p><b>Pelayanan:</b></p>
            {!! $package->pelayanan !!}
            <p><b>Email:</b> {{ $package->email }}</p>
            <p><b>No telepon:</b> {{ $package->nomor_telepon }}</p>
            <p><b>Alamat:</b> {!! $package->alamat !!}</p>
            <button class="btn btn-success">Pesan Paket Wisata</button>
        </div>
        
        
      </div></div>
    </div>
    <script>
      imgValue = document.getElementById('img-value').textContent
      imgUrl = "/Gambar/Tour Package/" + imgValue
      console.log(imgUrl);
      document.getElementById('bg-artikel').style.backgroundImage = `url("${imgUrl}")`; 
    </script>
  </body>
    
</html>