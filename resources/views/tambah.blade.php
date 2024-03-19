<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Tambah Foto</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- our css -->
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<nav class="bg-success">
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills fw-bold">
        <li class="nav-item active"><a href="/dashboard" class="nav-link text-white" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="/tabel" class="nav-link text-white">Gallery</a></li>
        <li class="nav-item"><a href="/tambah" class="nav-link text-white">Tambah Foto</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link text-white">FAQs</a></li> -->
        <li class="nav-item"><a href="/" class="nav-link text-danger">log out</a></li>
      </ul>
    </header>
  </div>
</nav>

<!-- crud -->
<div class="container">
    <h1 class="text-center mt-5 fw-bold">Tambah Foto</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
            <div class="card-body">
            <form action="/insert" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Foto</label>
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Masukkan Foto</label>
                    <input type="file" name="foto" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- end crud -->


<!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>