<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My favourite places</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
    
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 link-secondary">Галерея</a></li>
          <li><a href="contacts.php" class="nav-link px-2 link-dark">Профиль автора</a></li>
        </ul>
    
        <div class="col-md-3 text-end">
          <a href="login.php" class="btn btn-primary me-2">Войти</a>
          <a href="sign-up.php" class="btn btn-primary me-2">Зарегистрироваться</a>
        </div>
      </header>

    <div class="container my-5">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <div class="col">
          <div class="card">
            <img src="img/anya.jpg" class="card-img-top" alt="Anna" />
            <div class="card-body">
              <h5 class="card-title">Напольских Анна</h5>
              <p class="card-text">
                Художник на пол ставки
              </p>
              <a href="https://vk.com/annadmitrydottir" class="btn btn-primary" target="_blank">ВКонтакте</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
