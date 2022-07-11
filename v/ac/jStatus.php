        <div class="row">
            <div class="col s12 m-t-10 m-b-10">
                <div class="collection">
                    <?php if ($answer -> statusId == NULL) { ?>
                    <a href="#!" class="grey white-text collection-item">
                        <i class="material-icons left">lock_open</i> Sin Editar
                    </a>
                    <?php } if ($answer -> statusId == 1) { ?>
                    <a href="#!" class="orange white-text collection-item">
                        <i class="material-icons left">done</i> En Proceso
                    </a>
                    <?php } if ($answer -> statusId == 2) { ?>
                    <a href="#!" class="green white-text collection-item">
                        <i class="material-icons left">done</i> Completado
                    </a>
                    <?php } if ($answer -> statusId == 3) { ?>
                    <a href="#!" class="red white-text collection-item">
                        <i class="material-icons left">warning</i> Por Corregir
                    </a>
                    <?php } if ($answer -> statusId == 4) { ?>
                    <a href="#!" class="blue white-text collection-item">
                        <i class="material-icons left">done_all</i> Revisado
                    </a>
                    <?php } if ($answer -> statusId == 5) { ?>
                    <a href="#!" class="black white-text collection-item">
                        <i class="material-icons left">lock</i> Cerrado
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</form>
