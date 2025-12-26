<div class="container"><br>
    <div class="row">
        <h1 class="text-center" style="color: red;">Добро пожаловать в салон красоты Аврора!</h1><br><br>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-inner">
              <div class="carousel-item active">
      <img src="imeges/baner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imeges/baner2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imeges/aner3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
        </div>

          <br><h3 class="text-center" style="color: red;">Наши услуги</h3><br>
          <div class="row row-cols-1 row-cols-md-4 g-3">
  <?php 
             foreach($services as $row){
                echo'
                <div class="row">
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src='.$row['photo'].' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$row['name_services'].'</h5><br>
           <a href="client/zakaz" class="btn btn-danger">Записаться</a>
         </div>
    </div>
  </div>
    </div>                   ';}?>
</div>
<br>
            </div>
          </div>
    </div>
</div>






