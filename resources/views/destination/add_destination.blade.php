<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Village</title>
    <link rel="stylesheet" href="/css/join_us.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" type="text/css" href="/css/trix.css" />
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
      .btn-mulai:hover {
        color: white;
      }
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
  </head>
  <body>
    <!--Navbar Atas-->
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid px-4">
        <a class="travi navbar-brand ms-2" href="">
          <img
            src="/Gambar/daun.png"
            width="30px"
            class="d-inline-block mb-3"
            alt=""
          />
          Travi
        </a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item me-3">
            <a class="nav-link active" href="destination.html">Destination</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="tour_package.html">Tour Package</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container-fluid bg-home-1" style="height: 100px;"></div>
    <div class="container col-lg-7 mx-auto mt-5">
      <form>
        <h3 class="text-center mb-5">Data Destination</h3>
        <div class="row mb-4">
          <label class="col-sm-2 col-form-label">Judul:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" />
          </div>
        </div>
        <div class="row mb-4">
          <label class="col-sm-2 col-form-label">Lokasi:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" />
          </div>
        </div>
        <div class="row mb-4">
          <label class="col-sm-2 col-form-label">Gambar:</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" />
          </div>
        </div>
        <div class="row mb-4">
          <label class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input id="deskripsi" type="hidden" name="deskripsi" />
            <trix-editor input="deskripsi"></trix-editor>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <button class="btn btn-mulai">Tambah Data</button>
          </div>
        </div>
      </form>
    </div>

    <br /><br /><br /><br /><br /><br /><br /><br />
    <script>
      // menonaktifkan file upload di trix-editor
      document.addEventListener("trix-file-accept", function (e) {
        // menonaktifkan file upload di trix-editor
        e.preventDefault();
      });
    </script>
  </body>
</html>
