<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Currículo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="perfil">
    <?php
      $nome = "Ian Kilwiny Ribeiro Barros";
      $profissao = "Desenvolvedor Web e Gestor de Projetos";
      $email = "masterchief360@gmail.com";
      $telefone = "(88) 99214-1732";
    ?>
    <img src="imagens/sua_foto.png" alt="Foto de perfil" width="150">
    <h1><?php echo $nome; ?></h1>
    <p><strong><?php echo $profissao; ?></strong></p>
    <p><strong><?php echo $email; ?></strong></p>
    <p><strong><?php echo $telefone; ?></strong></p>
  </header>

  <section id="experiencia">
    <h2>Experiência Profissional</h2>
    <?php
      $experiencias = [
        "Desenvolvimento Back-End em Spring Framework",
        "Desenvolvedor Python",
        "Gestor de Projetos",
        "Automação"
      ];
      foreach($experiencias as $exp) {
        echo "<p>• $exp</p>";
      }
    ?>
  </section>

  <section id="cursos">
    <h2>Cursos e Formações</h2>
    <?php
      $cursos = [
        "Graduação em Sistemas de Informação - IFCE, Campus Cedro",
        "Curso de Desenvolvimento Web - Geração Tech",
        "IA com o Google - Alura",
        "To do List em Java - Alura"
      ];
      foreach($cursos as $curso) {
        echo "<p>• $curso</p>";
      }
    ?>
  </section>

  <section id="habilidades">
    <h3>Habilidades</h3>
    <?php
      $habilidades = [
        "HTML" => 9,
        "CSS" => 8,
        "JavaScript" => 5,
        "PHP" => 2,
        "Java" => 9
      ];
    ?>
    <?php if (!empty($habilidades)): ?>
      <ul>
        <?php foreach ($habilidades as $habilidade => $nivel): ?>
          <li>
            <?php echo $habilidade; ?>
            <div class="barra-nivel">
              <?php for ($i = 0; $i < $nivel; $i++): ?>
                <span class="preenchido"></span>
              <?php endfor; ?>
              <?php for ($i = $nivel; $i < 10; $i++): ?>
                <span></span>
              <?php endfor; ?>
            </div>
            (<?php echo $nivel; ?>/10)
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </section>

  <section id="hobbies">
    <h3>Hobbies</h3>
    <?php
      $hobbies = [
        "Jogos" => 10,
        "Leitura" => 5,
        "Música" => 9,
        "Fotografia" => 5,
        "Escritura" => 8
      ];
    ?>
    <?php if (!empty($hobbies)): ?>
      <ul>
        <?php foreach ($hobbies as $hobbie => $interesse): ?>
          <li>
            <?php echo $hobbie; ?>
            <div class="barra-nivel">
              <?php for ($i = 0; $i < $interesse; $i++): ?>
                <span class="preenchido hobby"></span>
              <?php endfor; ?>
              <?php for ($i = $interesse; $i < 10; $i++): ?>
                <span></span>
              <?php endfor; ?>
            </div>
            (<?php echo $interesse; ?>/10)
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </section>

  <footer>
    <p><strong>© <?php echo date("Y"); ?> <?php echo $nome; ?></strong></p>
  </footer>

</body>
</html>
