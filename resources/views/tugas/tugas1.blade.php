<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/index')}}">
    <title>tugas 1</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body, html {
    height: 100%;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column; 
    position: relative;
  }

  h1 {
    margin-bottom: 20px;
    font-size: 2rem;
    position: relative; 
    z-index: 1;
  }

  .biodata {
      font-size: 1rem;
      margin-bottom: 20px;
      text-align: left; 
      width: 300px; 
      position: relative;
      z-index: 1;
  }

  .card {
    background-color: #d2e9f5;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 1000px;
    position: relative;
    z-index: 0; 
  }

  h2 {
    margin-bottom: 15px;
  }

  p {
    color: #555;
  }
</style>

<body>
    <div class="container">
        <h1>Tugas 1</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('viska.jpg')}}" class="img-fluid rounded-start" alt="Photo">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Biodata Saya</h5>
              <div class="biodata">
                <p>Nama: Visaka Dewi.R</p>
                <p>Umur: 16 stengah Tahun</p>
                <p>Pekerjaan: Web Developer</p>
                <p>Hobi: Marah marah klw kata ayang</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>