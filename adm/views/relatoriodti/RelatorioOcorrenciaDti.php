
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-6"><img src="<?php echo URL; ?>/assets/image/computador.png" alt=""/> Gerar Relátorio DTI/ <a href="<?php echo URL; ?>controle-home/index">Home</a></div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['msg'])):
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    endif;
    ?>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" id="form_relatorioDti" target="_blank" action="<?php echo URL; ?>controle-relatorioDti/GerarRelatorioDti">
            <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status:</label>
                <div class="col-sm-8">
                    <select name = "status" class="form-control">
                        <option>Finalizado</option>
                        <option>Recusado</option>   
                        <option>Executando</option>      
                        <option>Aberto</option> 
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-saved"></i> Gerar</button>
                </div>
            </div>
        </form>
    </div>

</div>




