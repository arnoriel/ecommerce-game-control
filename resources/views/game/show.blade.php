<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat CRUD menggunakan Laravel PHp dan MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="margin: 10%;">
                    <div class="card-header bg-success text-white">game</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""><h5>Gambar</h5></label>
                            <br>
                            <img src="{{$game->gambar()}}" width="500px">
                            <br>
                            <label for=""><h5>Judul</h5></label>
                            <input type="text" name="title" value="{{$game->title}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Deskripsi</h5></label>
                            <input type="text" name="description" value="{{$game->description}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>info</h5></label>
                            <input type="text" name="info" value="{{$game->info}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>min</h5></label>
                            <input type="text" name="min" value="{{$game->min}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>rec</h5></label>
                            <input type="text" name="rec" value="{{$game->rec}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{url('/game')}}" class="btn btn-block btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>