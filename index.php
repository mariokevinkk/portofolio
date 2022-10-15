<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  <section id="navbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-black" >
        <div class="container">
          <a class="navbar-brand text-white"  href="#" >Mario Kevin  | Portofolio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#skill">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#portofolio">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#contact">Contact</a>
              </li>
              
            </ul>
           
          </div>
        </div>
      </nav>
  </section>      
  <section id="about">
    <div class="jumbotron bg-black" >
     <h1 >'</h1>
      <img src="foto kotak.jpeg" style="margin-top: 80px;"
       class="img-thumbnail rounded-circle mx-auto d-block" width="200" alt="">
      <center >
        <h1 class="display-4 text-white">Mario Kevin</h1>
        <p class="lead text-white" >Student of SMA N 4 Yogyakarta </p>
      </center>
    </div>

     <div class="container">
      <div class="row mt-5">
        <div class="col-sm-6">
          <center>
            <h1 class="display-4 mt-5">About Me</h1>
          </center>
        </div>
        <div class="col-sm-4">
          <p class="fs-10">Aku Adalah Seorang Pelajar Yang Ingin Masa Depan Yang Gemilang. Berbekal Ilmu Untuk Hari Esok. Tak Masalah Kalau Aku Harus Belerja Keras, Agar Aku Dapat Berhasil. Ya, Menjadi Orang Sukses Oleh Cita-Citaku.</p>  
          <p class="fs-10"> Berbekal Ilmu Untuk Hari Esok. Tak Masalah Kalau Aku Harus Belerja Keras, Agar Aku Dapat Berhasil. Ya, Menjadi Orang Sukses Oleh Cita-Citaku..</p>  
        

        </div>
        
      </div>
      
    </div>
  </section>
  <section id="portofolio">
      <div class="container">
        <h1 class="display-4 text-center " style="margin-top:50px">My Project</h1>
        <div class="row" >
        <?php

require "koneksi.php";
$sql= "SELECT * FROM gambar_project";
$result = mysqli_query($conn,$sql);

while ($data= mysqli_fetch_array($result)){
    ?>
    
        
          <div class="col-sm-4">
            <div class="card mt-5" >
              <img src="<?=$data["gambar"] ?>"alt="<?= $data["gambar"]?>"width=600 height=400 class="card-img-top p-3" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?=  $data["nama_project"]?></h5>
                <p class="card-text"><?= $data["deskpisi"]?></p>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#satu">
                Details
                </button>
              </div>
            </div>
          </div>   
          
          
          
        <?php
          }
        ?>
        </div>
        
      </div>
  </section>
  <section id="experience">
    <div class="container">
      <h1 class="display-4 text-center" style="margin-top: 120px;">Experience</h1>
      <div class="card" >
       
        <div class="card-body">
          <div class="card-header bg-black text-white">
            <h5 class="text-center">Pengalaman 1</h5>
          </div>
          <blockquote class="blockquote">
            <ul class="list-unstyled">
              <li>Pelajar aktif kelas 11</li>
              <li>Ikut Organisasi</li>
            </ul>
            <div class="blockquote-footer">SMA N 4 Yogyakarta</div>
          </blockquote>
      </div>
    </div>
  </section>
  <section id="experience">
    <div class="container">

      <div class="card" >
       
        <div class="card-body">
          <div class="card-header bg-black text-white">
            <h5 class="text-center">Pengalaman 2</h5>
          </div>
          <blockquote class="blockquote">
            <ul class="list-unstyled">
              <li>Pelajar aktif kelas 11</li>
              <li>Ikut Organisasi</li>
            </ul>
            <div class="blockquote-footer">SMA N 4 Yogyakarta</div>
          </blockquote>
      </div>
    </div>
  </section>
  <section id="experience"> 
    <div class="container">
   
      <div class="card" >
       
        <div class="card-body">
          <div class="card-header bg-black text-white">
            <h5 class="text-center">Pengalaman 3</h5>
          </div>
          <blockquote class="blockquote">
            <ul class="list-unstyled">
              <li>Pelajar aktif kelas 11</li>
              <li>Ikut Organisasi</li>
            </ul>
            <div class="blockquote-footer">SMA N 4 Yogyakarta</div>
          </blockquote>
      </div>
    </div>
  </section>    
  <section id="skill">
    <div class="container" style="margin-top: 120px;">
    <h1 class="display-4 text-center">My Skills</h1>
    <div class="row justify-content-center text-center">
      <div class="col-sm-1">
        <figure class="figure">
          <img src="html.png" class="figure-img img-fluid rounded"style="max-height: 80px" height="120" alt="...">
          <figcaption class="figure-caption">HTML</figcaption>
        </figure>
      </div>
      <div class="col-sm-1">
        <figure class="figure">
          <img src="css.png" class="figure-img img-fluid rounded" style="max-height: 80px " height="120" alt="...">
          <figcaption class="figure-caption" >CSS</figcaption>
        </figure>
      </div>
      <div class="col-sm-1">
        <figure class="figure">
          <img src="java-logo-1.png" class="figure-img img-fluid rounded"style="max-height: 80px"  height="120"  alt="...">
          <figcaption class="figure-caption">JAVA</figcaption>
        </figure>
      </div>
    </div>
    </div>
  </section>
  <section id="contact">
    <div class="container">
      <h1 class="display-4 text-center" style="margin-top: 120px;">Contact Me</h1>
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <form action="simpan_nama.php" method="post">
            
           <!-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div> -->
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" >Nama</label>
              <input type="text" class="form-control" name="nama" id="exampleInputPassword1">
            </div>
          <div class="mb-3"> 
            <label for="exampleInputPassword1" class="form-label">Pesan</label>
            <input type="text" name="pesan" class="form-control"  rows="3">
           </div>
            <button type="submit" class="btn btn-dark">Submit</button>
           
          </form>
        </div>
      </div>
   
    </div>
  </section>
  <section id="footer">
    <footer class="bg-black mt-5 pb-2 pt-4">
      <p class="text-center text-white bg-black">Copyright 2021 by Mario</p>
    </footer>
  </section>

  </head>
 <!-- Modal -->
<div class="modal fade" id="satu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Project 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                 <center>
                  <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                 </center>
                </div>
                <div class="carousel-item">
                <center>
                  <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                </center>
                </div>
                <div class="carousel-item">
                  <center>
                    <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                  </center>
                </div>
              </div>
              <button class="carousel-control-prev bgdanger" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next bg-danger" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-sm-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis vero atque et est saepe itaque aspernatur vitae quo asperiores eum natus sunt odio velit dolores deleniti fuga ea, iure dolor?</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="dua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Project 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                 <center>
                  <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                 </center>
                </div>
                <div class="carousel-item">
                <center>
                  <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                </center>
                </div>
                <div class="carousel-item">
                  <center>
                    <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                  </center>
                </div>
              </div>
              <button class="carousel-control-prev bgdanger" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next bg-danger" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-sm-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis vero atque et est saepe itaque aspernatur vitae quo asperiores eum natus sunt odio velit dolores deleniti fuga ea, iure dolor?</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="tiga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Project 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                 <center>
                  <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                 </center>
                </div>
                <div class="carousel-item">
                <center>
                  <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                </center>
                </div>
                <div class="carousel-item">
                  <center>
                    <img src="bebek2.jpg "  class="d-block w-120 "  alt="...">
                  </center>
                </div>
              </div>
              <button class="carousel-control-prev bgdanger" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next bg-danger" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-sm-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis vero atque et est saepe itaque aspernatur vitae quo asperiores eum natus sunt odio velit dolores deleniti fuga ea, iure dolor?</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


  <body>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>