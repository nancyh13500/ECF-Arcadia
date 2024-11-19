<!--Section banner with carrousel-->

<section id="banner">
  <div id="carouselExample" class="carousel slide position-relative">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/tigre1.jpg" class="d-block w-100" alt="tigre" />
      </div>
      <div class="carousel-item">
        <img src="/img/girafe3.jpg" class="d-block w-100" alt="girafe" />
      </div>
      <div class="carousel-item">
        <img src="/img/lion3.jpg" class="d-block w-100" alt="lion" />
      </div>
      <div class="image-text position-absolute">
        <h1 class="text-white fs-1 text">Bienvenue au Zoo Arcadia</h1>
        <div class="text text-white">
          <p class="text-center">Forêt de Brocéliande en Bretagne</p>
          <p class="text-end">Ouvert 7/7j</p>
        </div>
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExample"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExample"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!--End banner with carrousel-->

<!--Section welcome-->
<section id="welcome">
  <article class="bg-secondary text-center p-4">
    <div class="container p-3 text-white">
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

<!--End section wolcome-->

<!--Section animals-->
<section id="animals">
  <article class="bg-dark p-4 align-content-center">
    <p class="text-center text-white">Nos animaux</p>
    <p class="text-center text-white">Portrait de nos habitants</p>
    <div class="row row-cols-1 row-cols-lg-3 pe-4">
      <div class="col pe-3">
        <div class="img-card">
          <img src="/img/girafe.jpg" alt="Sophie" class="w-100" />
        </div>
        <div class="name text-center">
          <a href="/pages/habitats.php" class="btn btn-dark text-white">Sophie</a>
        </div>
      </div>
      <div class="col pe-3">
        <div class="img-card">
          <img src="/img/lion.jpg" alt="King" class="w-100" />
        </div>
        <div class="name text-center">
          <a href="/pages/habitats.php" class="btn btn-dark text-white">The King</a>
        </div>
      </div>
      <div class="col pe-3">
        <div class="img-card">
          <img src="/img/hippopotame.jpg" alt="Blacky" class="w-100" />
        </div>
        <div class="name text-center">
          <a href="/pages/habitats.php" class="btn btn-dark text-white">Blacky</a>
        </div>
      </div>
    </div>
  </article>
</section>

<!--End section animals-->

<!--Section avis-->
<section>
  <article class="avis bg-primary p-5">
    <div class="container p-3 text-white">
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