<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Lab Ann</title>
  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
</head>
<body>
  <!-- Header -->

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
  
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Галерея</a></li>
        <li><a href="contacts.php" class="nav-link px-2 link-dark">Профиль автора</a></li>
      </ul>
  
      <div class="col-md-3 text-end">
        <a href="login.php" class="btn btn-primary me-2">Войти</a>
        <a href="sign-up.php" class="btn btn-primary me-2">Зарегистрироваться</a>
      </div>
    </header>


  <!-- Main -->
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="img/photo1.jpg" alt="Grillby" class="bd-placeholder-img card-img-top" width="100%" height="575" />

            <div class="card-body">
              <p class="card-text">#Grillby #Grillbys #undertale</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="img/photo1.jpg" target="_blank" class="btn btn-sm btn-outline-secondary">Открыть</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="img/photo2.png" alt="Bananus" class="bd-placeholder-img card-img-top" width="100%" height="575"/>

            <div class="card-body">
              <p class="card-text">#genshinimpact #yaksha #Bonanus</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="img/photo2.png" target="_blank" class="btn btn-sm btn-outline-secondary">Открыть</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="img/photo3.jpg" alt="why" class="bd-placeholder-img card-img-top" width="100%" height="575"/>

            <div class="card-body">
              <p class="card-text">#genshinimpact #venti #decarabian</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="img/photo3.jpg" target="_blank" class="btn btn-sm btn-outline-secondary">Открыть</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

</body>
</html>