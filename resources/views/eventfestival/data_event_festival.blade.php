<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Village</title>
    <link rel="stylesheet" href="/css/data_event_festival.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!--Navbar Atas-->
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid px-4">
        <a class="travi navbar-brand ms-2" href="/">
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
            <a class="nav-link" href="/destination/data">Destination</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link active" href="/event-festival/data">Event & Festival</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container-fluid bg-home-1"></div>
    <div class="container mt-4 title-home-1">
      <h4 class="mb-4">Event & Festival</h4>
      <a
        class="btn-mulai px-3 py-2 align-self-center"
        href="/event-festival/add"
        role="button"
        >Tambah</a
      >
    </div>
    <div class="container mt-3">
      <div class="table-responsive-lg">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Gambar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Upacara adat Bali Tari kecak</td>
              <td>
                salah satu atraksi wisata ikonik di Bali yang tidak boleh
                dilewatkan adalah pertunjukan tarian Kecak. Awalnya tari Kecak
                adalah ritual kuno Bali yang disebut sebagai Sanghyang, yang
                bertujuan untuk mengusir roh jahat.
              </td>
              <td>Bali</td>
              <td>Gambar</td>
              <td>
                <div class="d-flex justify-content-start">
                  <div class="me-2">
                    <a href="" class="btn btn-danger">Delete</a>
                  </div>
                  <div>
                    <a href="" class="btn btn-warning">Edit</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <br /><br /><br /><br /><br /><br /><br /><br />
  </body>
</html>
