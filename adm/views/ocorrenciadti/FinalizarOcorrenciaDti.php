<div class="panel panel-default">
    <div class="panel-body">

         <div class="col-sm-6"><img src="<?php echo URL; ?>/assets/image/computador.png" alt=""/> Finalizar Ocorrência-DTI/ <a href="<?php echo URL; ?>controle-ocorrenciadti/index">Listar Ocorrência-DTI</a></div>
        <div class="col-sm-6" id="msg" style="display: none"><h5 style="color: green"><strong id="strong-msg">Cadastrado com sucesso!</strong></h5></div>
    </div>
</div>
<div class="panel panel-default col-sm-6">
    <div class="panel-body " >
        <div class="form-group">
            <div class="col-sm-6">
                <input type="hidden" id="atcoddti" value="<?php echo $this->Dados[0]['atcoddti'] ?>">
                <label for="occoddti" class=" control-label" style="color: #999">N° Ocorrência: <span style="font-size: 14px; color: black">0<?php echo $this->Dados[0]['occoddti'] ?></span></label>         
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <div class="col-sm-6">
                <label for="occoddti" class=" control-label" style="color: #999">Solicitante: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['usunome'] ?></span></label>         
            </div>
            <div class="col-sm-6">
                <label for="occoddti" class=" control-label"style="color:#999">Datat/hora: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['ocdatadti'] ?> / <?php echo $this->Dados[0]['ochoradti'] ?></span></label>         
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <div class="col-sm-6">
                <label for="occoddti" class=" control-label" style="color: #999">Departamento: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['depdescricao'] ?></span></label>         
            </div>
            <div class="col-sm-6">
                <label for="occoddti" class=" control-label"style="color:#999">Tipo: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['tipdescricaodti'] ?> </span></label>         
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <div class="col-sm-6">
                <label for="occoddti" class=" control-label" style="color: #999">Prioridade: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['ocprioridadedti'] ?></span></label>         
            </div>
            <div class="col-sm-6">
                <label for="occoddti class=" control-label"style="color:#999">Previsão: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['ocdtprevisaodti'] ?></span></label>         
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="occoddti" class=" control-label" style="color: #999">Descrição: <span style="font-size: 14px; color: black"><?php echo $this->Dados[0]['ocdescricaodti'] ?></span></label>         
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-6">
                <label for="occoddti" class=" control-label"> </label>         
            </div>
        </div>
    </div>  
</div>

<div class=" col-sm-6">
    <form class="form-horizontal" id="form_ocorrencia_editar">
        <div class="form-group">
            <div class="col-sm-12">
                <label for="atteccod1dti" class=" control-label">Técnico 01:</label>
                <select id="atteccod1dti" class="form-control">

                   <?php
                    if ($this->Dados[0]['atteccod1dti'] == null) {
                        ?>
                        <option>Selecione</option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $this->Dados[0]['atteccod1dti'] ?>"><?php echo $this->Dados[0]['atteccod1dti'] ?></option>
                        <?php
                    }
                    ?>
                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['tecnome'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>   

                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="atteccod2dti" class=" control-label">Técnico 02:</label>
                <select id="atteccod2dti" disabled="disabled" class="form-control">
                   <?php
                    if ($this->Dados[0]['atteccod2dti'] == null) {
                        ?>
                        <option>Selecione</option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $this->Dados[0]['atteccod2dti'] ?>"><?php echo $this->Dados[0]['atteccod2dti'] ?></option>
                        <?php
                    }
                    ?>
                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['tecnome'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>    
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="atteccod3dti" class=" control-label">Técnico 03:</label>
                <select id="atteccod3dti" disabled="disabled" class="form-control">
                    <?php
                    if ($this->Dados[0]['atteccod3dti'] == null) {
                        ?>
                        <option>Selecione</option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $this->Dados[0]['atteccod3dti'] ?>"><?php echo $this->Dados[0]['atteccod3dti'] ?></option>
                        <?php
                    }
                    ?>

                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['tecnome'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>   
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="atteccod4dti" class=" control-label">Técnico 04:</label>
                <select id="atteccod4dti" disabled="disabled" class="form-control">
                    <?php
                    if ($this->Dados[0]['atteccod4dti'] == null) {
                        ?>
                        <option>Selecione</option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $this->Dados[0]['atteccod4dti'] ?>"><?php echo $this->Dados[0]['atteccod4dti'] ?></option>
                        <?php
                    }
                    ?> 
                    <?php
                    foreach ($this->Dados1 as $tecnico) {
                        ?>
                        <option value="<?= $tecnico['tecnome'] ?>"><?= $tecnico['tecnome'] ?></option>
                        <?php
                    }
                    ?>   
                </select>
            </div>
        </div>

    </form>
</div>
<div class="col-sm-12">
    <div class="col-sm-12">
        <label for="atdescricaodti" class=" control-label">Descrição da Atividade Realizada:</label>
        <textarea class="form-control" rows="5" id="atdescricaodti"></textarea>
    </div>
</div>
<div class=" col-sm-12"> 
    <br>
</div>
<div class=" col-sm-12">
    <div class="col-sm-12 text-center" >
        <?php
        if ($this->Dados[0]['ocstatusdti'] == "Aberto") {
            ?>
            <h3>Processo não pode ser finalizado pois o mesmo está em <span style="color: red">"aberto"</span>.</h3>
            <?php
        } else if ($this->Dados[0]['ocstatusdti'] == "Pendente") {
            ?>
            <<h3>Processo não pode ser finalizado pois o mesmo está <span style="color: red">"pendente"</span>.</h3>
            <?php
        } else if ($this->Dados[0]['ocstatusdti'] == "Executando") {
            ?>
            <button style="width: 250px; height: 80px" id="finalizarDti"  type="button" class="btn-lg btn-danger">Finalizar execução</button> 
            <?php
        } else if ($this->Dados[0]['ocstatusdti'] == "Finalizado") {
            ?>
            <h3>Processo não pode ser finalizado pois o mesmo está <span style="color: red">"finalizado"</span>.</h3>
            <?php
        } else if ($this->Dados[0]['ocstatusdti'] == "Recusado") {
            ?>
            <h3>Processo não pode ser finalizado pois o mesmo está <span style="color: red">"recusado"</span>.</h3>
            <?php
        }
        ?>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/ExecutarDti3.js"></script>

