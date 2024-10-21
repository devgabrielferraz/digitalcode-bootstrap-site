<?php
  $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto','root','');
  $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
  $sobre->execute();
  $sobre = $sobre->fetch()['sobre'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="palavras-chave,do,meu,site">
	  <meta name="description" content="Descrição do meu website">
	  <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>Digital Code</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
   
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Digital Code</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="">Home</a></li>
            <li><a href="#saiba_mais">Sobre</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="box">
      <section class="banner">
        <div class="overlay"></div>
        <div class="container chamada-banner">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h2><?php echo htmlentities('<'); ?>Digital.Code<?php echo htmlentities('>');  ?></h2>
                  <p>Empresa voltada para desenvolvimento web e marketing digital</p>
                  <a href="#saiba_mais">Saiba Mais!</a>
              </div><!--col-md-12-->
          </div><!--row-->
        </div>
      </section>
      <section class="cadastro-lead">
          <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                  <h2><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Entre na nossa lista!</h2>
                </div>
                <div class="col-md-6">
                  <form method="post">
                    <input type="email" name="email" placeholder="Digite aqui o seu e-mail" required/><input type="submit" value="Enviar" />
                  </form>
                </div>
            </div>
          </div>
      </section>

      <section id="saiba_mais" class="depoimento text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h2>Conheça nossa empresa</h2>
                    <blockquote>
                      <p>A Digital Code é uma empresa especializada em desenvolvimento web e marketing digital, comprometida em fornecer soluções inovadoras e personalizadas para ajudar nossos clientes a alcançar uma presença digital de destaque. Com uma equipe de desenvolvedores experientes e estrategistas de marketing, criamos sites modernos, funcionais e otimizados, além de campanhas digitais que impulsionam o crescimento de negócios de todos os portes. Nosso objetivo é transformar ideias em resultados, oferecendo serviços que vão desde o design de sites até estratégias de SEO e gestão de redes sociais, garantindo visibilidade e sucesso do seu negócio no ambiente digital.</p>
                  </blockquote>
                </div>
            </div>
        </div>
      </section>

    <section class="diferenciais text-center">
      <h2>Nossos Diferenciais</h2>
        <div class="container diferenciais-container">
            <div class="row"><?php echo $sobre; ?></div>
        </div>
      </section>

      <section class="equipe">
        <h2>Conheça nossa equipe</h2>
        <div class="container equipe-container">
            <div class="row">
              <?php
                  $selectMembros = $pdo->prepare("SELECT * FROM `tb_equipe`");
                  $selectMembros->execute();
                  $membros = $selectMembros->fetchAlL();
                  for($i = 0; $i < count($membros); $i++){
              ?>
                <div class="col-md-6">
                    <div class="equipe-single">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="user-picture">
                                  <div class="user-picture-child"><span class="glyphicon glyphicon-user"></span></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h3><?php echo $membros[$i]['nome'] ?></h3>
                                <p><?php echo $membros[$i]['descricao']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>  
                <?php } ?>       
            </div>
        </div><!--equipe-container-->
      </section>


      <section id="contato" class="final-site">
          <div class="container">
              <div class="row">

                  <div class="col-md-6">
                    <h2>Fale conosco</h2>
                    <form id="meuFormulario">
                        <div class="form-group">
                          <label for="email">Nome:</label>
                          <input type="text" name="nome" class="form-control" id="nome" required>
                        </div>

                         <div class="form-group">
                          <label for="email">E-mail:</label>
                          <input type="email" name="email" class="form-control" id="email" required>
                        </div>

                         <div class="form-group">
                          <label for="email">Mensagem:</label>
                          <textarea class="form-control" id="mensagem" required></textarea>
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <!-- Espaço para a mensagem de sucesso -->
                      <div id="mensagemSucesso" class="alert alert-success mt-3" style="display: none;">
                        Mensagem enviada com sucesso!
                      </div>
                    </div>

      <script>
              // Pegamos o formulário e o div da mensagem de sucesso
              const formulario = document.getElementById('meuFormulario');
              const mensagemSucesso = document.getElementById('mensagemSucesso');

              // Adicionamos um ouvinte de evento para o envio do formulário
              formulario.addEventListener('submit', function(event) {
              // Prevenir o comportamento padrão do formulário
              event.preventDefault();

              // Pegar os valores dos campos
              const nome = document.getElementById('nome').value;
              const email = document.getElementById('email').value;
              const mensagem = document.getElementById('mensagem').value;

              // Validação básica (garantir que todos os campos estão preenchidos)
              if (nome && email && mensagem) {
              // Exibir a mensagem de sucesso
              mensagemSucesso.style.display = 'block';

              // Opcional: Limpar o formulário após enviar
               formulario.reset();
                } else {
              // Caso os campos não estejam preenchidos, você pode exibir uma mensagem de erro
                alert('Por favor, preencha todos os campos antes de enviar.');
                }
              });
      </script>

                  <div class="col-md-6">
                      <h2>Nossos planos</h2>
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Plano Single</th>
                                <th>Plano Premium</th>
                                <th>Plano Business</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>R$49,90/mês</td>
                                <td>R$99,90/mês</td>
                                <td>R$199,90/mês</td>
                              </tr>

                              <tr>
                                <td>R$499,90/ano</td>
                                <td>R$999,90/ano</td>
                                <td>R$1950,00/ano</td>
                              </tr>
                         
                            </tbody>
                          </table>
                  </div>

              </div>
          </div>
      </section>

      <footer>
        <p class="text-center">Todos os direitos reservados!</p>
      </footer>

    </div><!--box-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>