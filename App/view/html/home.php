<?php

require_once  'app/controllers/CalculoController.php';

$CalC = new app\Controllers\CalculoController();
?>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="lib/bootstrap-5.1.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="app/view/css/style.css">
  <title>Jarvan X</title>
</head>

<body class="bg-dark">

  <section class="container-sm ">
    <header>

    </header>

    <main>
      <div class=" my-5 py-5 mx-5 my-5 text-center border border-secondary rd">
        <section class=" my-5 py-5 mx-5 my-5 text-center">
          <img src="app/view/img/robot.jpg" alt="Robo Interface" class="img">
          <section class="mx-5 mx-5 text-center ">
            <div class="mx-5 my-2 text-center ">
              <div class="mx-5 my-2 text-center ">
                <div class="mx-5 my-2 text-center ">
                  <form action="" method="post">
                    <div class="input-group input-group-lg mb-3">
                      <span class="input-group-text bg-primary text-light" id="inputGroup-sizing-lg">0</span>
                      <input type="number" class="form-control" name="numero" placeholder="Numero" aria-label="Numero" aria-describedby="basic-addon1">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>

          <h1 class="text-primary"> <?php $CalC->getNumero(); ?> </h1>



        </section>
      </div>

      <section>

      </section>



    </main>

    <footer>

    </footer>
  </section>




</body>

</html>