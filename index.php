<html>
  <head>
    <title>Cadastro de Estudantes</title>
    <?php
    $_contador = 0;
    ?>
    
  </head>
  <body>
    <?php 
    if(isset($_GET['cada'])){
      if(isset($_GET['radio1'])){
        $radio = $_GET['radio1'];
      }else{
           $radio = '';
      }

      if($radio == "Homem"){
        echo "<p>Você escolheu o sexo masculino.</p>";
      }else if($radio == "Mulher"){
        echo "<p>Você escolheu o sexo feminino.</p>";
      }else {
        echo "<p>Você não escolheu nenhum sexo.</p>";
      }
    }
    ?>
      
    <form action="" method="get">
      <h1>Formulário para cadastro de estudantes.</h1>
      <h2>Este formulário será utilizado para cadastrar os estudantes no sistema, para que no futuro todos possam realizar a "batida de ponto" ao entrar na sala de aula.</h2>
      <h3>Preencha os campos abaixo para realizar o cadastro.</h3>
      <label for="radio1">Homem</label>
      <input type="radio" name="radio1" value="Homem">
      <label for="radio1">Mulher</label>
      <input type="radio" name="radio1" value="Mulher">
      <input type="submit" name="cada">
    </form>
    
    <?php 
    if(isset($_GET['cada'])){
      if(isset($_GET['radio1'])){
        $radio = $_GET['radio1'];
      }else{
           $radio = '';
      }

      if($radio == "Homem"){
        echo "<p>Você escolheu o sexo masculino.</p>";
      }else if($radio == "Mulher"){
        echo "<p>Você escolheu o sexo feminino.</p>";
      }else {
        echo "<p>Você não escolheu nenhum sexo.</p>";
      }
    }
    ?>
  </body>
</html>
