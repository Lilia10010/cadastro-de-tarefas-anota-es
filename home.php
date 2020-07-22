   <?php  require_once("header.php"); ?>

   <main class="container">
    <form action="" class="row">
            <div class="input-field col s10">
                <input type="text" name="busca" id="busca">
                <label for="busca">Digite para buscar</label>
            </div>
            <div class="input-field col s2">
                <button class="btn btn-padrao"><i class="material-icons">search</i></button>
            </div> 
            
        </form>
        <div class="input-field col s2">
            <a href="#cadastrar_tarefa" class="waves-effect modal-trigger waves-light btn-small btn-padrao" style="float:right"><i class="material-icons right">add</i>Cadastrar tarefa</a>
        </div>
              <!-- Modal editar tarefa-->
    <div id="cadastrar_tarefa" class="modal">
     <a href="#!" class="modal-close modal-close-x waves-effect waves-green btn-flat">X</a>
        <div class="modal-content">
        <h5>Cadastrar tarefa <br></h5>
          <?php require_once("cadastro_tarefa.php");?>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar tela</a>
        </div>
    </div><!-- Fim modal editar tarefa-->


    <table border="1" class="striped">
        <thead>
            <tr>
            <?php if($_SESSION['perfil'] == 1){  ?>
                <td>Usuário</td>
            <?php } ?>

                <th>Título</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Opções</th>
            </tr>
        </thead>

        <?php foreach($sql_tarefas as $tarefa){ ?>
        
        <tr>
        <?php if($_SESSION['perfil'] == 1){  ?>
            <td><?= $tarefa['nome']?></td>
        <?php } ?>

            
            <td><a class="waves-effect waves-light modal-trigger" href="#ver_tarefa<?= $tarefa['codt']?>"><?= $tarefa['titulo']?></a></td>
            <td><?= $tarefa['data']?></td>
            <td><?= $tarefa['hora']?></td>
            <td>
            <!-- Modal Trigger ver tarefa-->
            <a class="waves-effect waves-light modal-trigger" href="#ver_tarefa<?= $tarefa['codt']?>" title="ver tarefa"><i class="material-icons">remove_red_eye</i></a>
            <a class="waves-effect waves-light modal-trigger" href="#editar_tarefa<?= $tarefa['codt']?>" title="editar tarefa"><i class="material-icons">edit</i></a>

            <a class="waves-effect waves-light modal-trigger" href="#excluir_tarefa<?= $tarefa['codt']?>" title="excluir tarefa"><i class="material-icons">delete_forever</i></a>
            

             <!-- Modal Structure ver tarefa-->
  <div id="ver_tarefa<?= $tarefa['codt']?>" class="modal">
     <a href="#!" class="modal-close modal-close-x waves-effect waves-green btn-flat">X</a>
        <div class="modal-content">
        <h5>Título: <?= $tarefa['titulo']?> <br></h5>
        <?php 
            if($_SESSION['perfil'] == 1){
        ?>
        <strong>Usuário:</strong> <?= $tarefa['nome']?> <br>
        <?php } ?>    
        <strong>Data:</strong> <?= date("d/m/Y", strtotime($tarefa['data']));?> <br>
        <strong>Hora:</strong> <?= $tarefa['hora']?> <br>    
        <strong>Categoria:</strong> <?= $tarefa['categoria']?><br>
        <strong>Descrição:</strong> <?= $tarefa['descricao']?>
        </div>
        <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar tela</a>
        </div>
    </div><!-- Fim modal ver tarefa-->

                <!-- Modal editar tarefa-->
    <div id="editar_tarefa<?= $tarefa['codt']?>" class="modal">
     <a href="#!" class="modal-close modal-close-x waves-effect waves-green btn-flat">X</a>
        <div class="modal-content">
        <h5>Editar tarefa <br></h5>
            <form action="db/edit_tarefa.php" method="post">
                <input type="hidden" value="<?= $tarefa['codt']?>" name="cod">
                Título:   
                <input type="text" name="titulo" value="<?= $tarefa['titulo']; ?>"> <br>
                Data: 
                <input type="text" name="data" value="<?= $tarefa['data']; ?>"> <br>
                Hora: 
                <input type="text" name="hora" value="<?= $tarefa['hora']; ?>"> <br>
                Categoria:
                <input type="text" name="categoria" value="<?= $tarefa['categoria']; ?>"> <br>
            
                Descrição: 
                <textarea name="descricao" id="" cols="30" rows="10"><?= $tarefa['descricao'];?></textarea> <br>
                <button>Salvar</button>
            </form>
        </div>
        <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar tela</a>
        </div>
    </div><!-- Fim modal editar tarefa-->

     <!-- Modal excluir tarefa-->
  <div id="excluir_tarefa<?= $tarefa['codt']?>" class="modal">
     <a href="#!" class="modal-close modal-close-x waves-effect waves-green btn-flat">X</a>
        <div class="modal-content">
        <h5>Título: <?= $tarefa['titulo']?> <br></h5>
        <?php 
            if($_SESSION['perfil'] == 1){
        ?>
        <strong>Usuário:</strong> <?= $tarefa['nome']?> <br>
        <?php } ?> 

        <strong>Confirmar exclusão?</strong> <a class="waves-effect waves-light btn-small  red darken-1" href="db/excluir_tarefa.php?cod=<?= $tarefa['codt']?>">Excluir</a>


        </div>
        <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar tela</a>
        </div>
    </div><!-- Fim modal excluir tarefa-->
    
            </td>
        </tr>
        <?php } ?>
    </table>

    
    </main> 
    <?php require_once("footer.php"); ?>