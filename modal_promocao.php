<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Participe do nosso sorteio! &nbsp; <span class="fa fa-hand-peace-o fa-lg"></span></h4>
      </div>
      <div class="modal-body">
        <strong>QUER GANHAR 1 MÊS DE AULA GRÁTIS PRA TE AJUDAR A PASSAR?<br/>PARTICIPE DO SORTEIO, <strong>É FÁCIL!</strong> &nbsp; <span class="fa fa-hand-o-down fa-lg"></span> 
       <form style="margin-top: 25px" name="cadastro" value="cadastro" method="post" action="cadastroemail.php">
          <input type="hidden" name="tipo" id="tipo" value="0">
          <div class="form-group">
            <label>Nome</label>
              <input name="nome" style="width: 60%" type="nome" class="form-control" id="nome" placeholder="nome">
          </div>
          <div class="form-group">
              <label>Email</label>
              <input name="email" style="width: 60%" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required pattern="[^ @]*@[^ @]*">
          </div>
          <label>Escolaridade</label>
          <div class="radio">
              <label class="radio">
                  <input type="radio" name="escolaridade" id="primeiroSegundoAno" value="1">Estou no 1 ou no 2 ano do ensino médio</label>
              <label class="radio">
                  <input type="radio" name="escolaridade" id="terceiroAno" value="2">Estou no 3 ano do ensino médio</label>
              <label class="radio">
                  <input type="radio" name="escolaridade" id="formado" value="3">Sou vestibulando já formado</label>
              <label class="radio">
                  <input type="radio" name="escolaridade" id="outros" value="4">Outros</label>
              <br>
              <center>
              <button type="submit" class="btn btn-success btn-block" style="width: 70%"><b>PARTICIPAR</b></button>
                  </center>
          </div>
      </form>
      <span style="font-size: 10px">Conheça nossos <a href="ebook/politicasPrivacidadeEnemToTop.pdf">Termos de Política de Privacidade</a></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
      </div>
    </div>
  </div>
</div>
<?php
  if(!$_COOKIE['CookiePromocao'] and !$_POST['pag']){
    echo "<script>
          (function() {
              setTimeout(function(){ $('#myModal').modal('toggle'); },  8000);
          })();
        </script>";
  }
?>