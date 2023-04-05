<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </head>
  <body style="background-color: rgb(202, 202, 202);">
      <div class="container" style="background-color: white; padding: 0;">
     <nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SISTEMA WEB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Consultar</a>
              </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="tabela">
        <h3>Consultar- Contatos Agendados</h1>
        <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr id="head">
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Origem</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Observação</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                      <td>
                        <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setNome($_POST['nome']);
                            echo $pessoa->getNome();
                        ?>
                    </td>
                    <td>
                    <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setTelefone($_POST['telefone']);
                            echo $pessoa->getTelefone();
                        ?>
                    </td>
                    <td>
                    <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setOrigem($_POST['origem']);
                            echo $pessoa->getOrigem();
                        ?>
                    </td>

                    <td>
                    <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setData($_POST['data']);
                            echo $pessoa->getData();
                        ?>
                    </td>

                    <td>
                    <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setObservacao($_POST['observacao']);
                            echo $pessoa->getObservacao();
                        ?>
                    </td>

                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>