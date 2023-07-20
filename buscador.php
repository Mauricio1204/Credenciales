<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Buscador</title>   
              
</head>
<body style="background-color: rgba(45, 179, 127, 0.842);">
    <div class="container">
          <div class="row">            
        <div class="col-8 mx-auto my-5 " > 
        


            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/1.png" class="d-block w-100" style="margin: 0px auto" >
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/2.png" class="d-block w-100"style="margin: 0px auto">
                  </div>
                  <div class="carousel-item">
                    <img src="img/3.png" class="d-block w-100" style="margin: 0px auto">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <br>
              <br>
              <br>
              <form>      
         <div class="form-group"><label for="">Buscador:</label>
            <div class="input-group">
            <input type="text" class="form-control" placeholder="..." style="text-transform: uppercase;">
             <button type="submit" class=" input-group-tex btn btn-warning"><i class="fas fa-search fa-sm me-1"></i>Buscar</button>
          </div>
        </div>
    </form>
        </div>
    </div>
    </div>



</body>
</html>