<div class="container">
    <div class="row">
        <br>
        <div class="col-md-12">
            <br><hr/><br><br>
        </div>
        <div class="col-md-12">
            <?php if ($Sessao::retornaMensagem()) { ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $Sessao::retornaMensagem(); ?>
                </div>
            <?php } ?>

            <?php
            if (!count($viewVar['listaCidades'])) {
                ?>
                <div class="alert alert-info" role="alert">Nenhum cidade encontrada</div>
                <?php
            } else {
                ?>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="info">Cidade</td>
                            <td class="info">Estado</td>
                            <td class="info">Ações</td>

                        </tr>
                        <?php
                        foreach ($viewVar['listaCidades'] as $cidade) {
                            ?>
                            <tr>
                                <td><?php echo $cidade->getNomecid(); ?></td>
                                <td><?php echo $cidade->getIdestado()->getNomestado(); ?></td>
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/cidade/edicao/<?php echo $cidade->getIdcid(); ?>" class="btn btn-info btn-sm">Editar</a>
                                    <a href="http://<?php echo APP_HOST; ?>/cidade/exclusao/<?php echo $cidade->getIdcid(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>