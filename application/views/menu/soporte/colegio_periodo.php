<?php $ruta = base_url();?>
<div class="span12">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="tb_periodo">
        <thead>
            <tr>
                <th>Periodo</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($lista_periodo)>0):?>
            <?php foreach ($lista_periodo as $lp):?>
                <tr class="odd gradeX">
                    <td><?php echo $lp->Tipo;?></td>
                    <td><?php echo $lp->FechaInicio;?></td>
                    <td ><?php echo $lp->FechaFin;?></td>
                    <td><a href="#modalEditarDocente" data-toggle="modal" class="btn btn-red"><i></i>Eliminar</a>
                </tr>
            <?php endforeach;?>
            <?php else :?>
            <?php endif;?>
        </tbody>
    </table>
</div>