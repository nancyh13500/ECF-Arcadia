<!--Section carousel-->
<div id="carouselExampleAutoplaying" class="carousel slide position relative" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/tigre1.jpg" class="d-block w-100" alt="tigre">
    </div>
    <div class="carousel-item">
      <img src="/img/girafe3.jpg" class="d-block w-100" alt="girafe">
    </div>
    <div class="carousel-item">
      <img src="/img/lion3.jpg" class="d-block w-100" alt="lion">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="image-text position-absolute">
    <h1 class="text-white fs-1 text">Bienvenue au Zoo Arcadia</h1>
    <div class="text text-white">
      <p class="text-center">Forêt de Brocéliande en Bretagne</p>
      <p class="text-center">Ouvert 7/7j</p>
    </div>
  </div>
</div>
<!--End section carousel-->

<!--Section welcome-->
<section id="welcome">
  <article class="bg-light text-center p-4">
    <div class="container p-3 text-success">
      <p>
        Arcadia est un Zoo situé en France près de la forêt de Brocéliande en
        Bretagne depuis 1960.
      </p>
      <p>
        Vous trouverez tout un panel d'animaux, répartis par habitat, savane,
        jungle, marais...
      </p>
      <br />
      <p>Tous ces animaux sont heureux.</p>
    </div>
  </article>
</section>

<!--End section welcome-->

<!--Section animals-->
<section id="animals pb-4">
  <div class="animals bg-dark">
    <article class="bg-dark p-4 align-content-center">
      <p class="text-center text-white">Nos animaux</p>
      <p class="text-center text-white">Portrait de nos habitants</p>
    </article>

    <div class="row">
      <div class="col-md-4 style=" width: 18rem;>
        <div class="card bg-dark">
          <img src="/img/girafe.jpg" alt="Sophie">
          <div class="card-body text-center">
            <a href="/pages/sophie.php" class="btn btn-secondary text-white w-100">Sophie</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 style=" width: 18rem;>
        <div class="card bg-dark">
          <img src="/img/lion.jpg" alt="The King">
          <div class="card-body text-center">
            <a href="/pages/king.php" class="btn btn-secondary text-white w-100">The King</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 style=" width: 18rem;>
        <div class="card bg-dark">
          <img src="/img/hippopotame.jpg" alt="Blacky">
          <div class="card-body text-center">
            <a href="/pages/blacky.php" class="btn btn-secondary text-white w-100">Blacky</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>

<!--End section animals-->

<!--Section avis-->
<section>
  <article class="avis bg-light p-5">
    <div class="container p-3 text-success">
      <p>Avis</p>
    </div>
    <div class="container_avis">
      <div class="row row-cols-md-3 align-content-md-center">
        <div class="row">
          <p>Donnez votre avis</p>
          <input type="text" id="text" required minlength="2" maxlength="100" />
        </div>
        <div class="row">
          <p>Donnez votre avis</p>
          <input type="text" id="text" required minlength="2" maxlength="100" />
        </div>
        <div class="row">
          <p>Donnez votre avis</p>
          <input type="text" id="text" required minlength="2" maxlength="100" />
        </div>
      </div>
    </div>
  </article>
</section>

<!--End section avis-->