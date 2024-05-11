<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disco Collection</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3"></script>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand ml-3 d-flex align-items-center" href="#">
        <img src="./img/spotify-logo.png" alt="Spotify Logo" class="me-2">
      </a>
    </div>
  </nav>
</header>

    <main>
        <div id="app">
            <section class="container d-flex justify-content-evenly flex-wrap">
                <div class="ms-card m-4">
                    <img class="img-fluid p-4" :src="disc.poster" :alt="disc.title">
                    <div class="text-center">
                        <div>DISC.TITLE</div>
                        <div>DISC,AUTHOR</div>
                        <div>DISC.YEAR</div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>