    <form class="formValidate" id="formValidate" action="../c/ticket.php?m=createDb" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this);">
        <div id="ticket1" class="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="col s12 m-b-5">
                        <a href="#!" class="breadcrumb">Soporte IT</a>
                        <a href="#!" class="breadcrumb ">Solicitar Soporte</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar">
                            <i class="material-icons blue-grey-text">cancel</i>
                        </a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 m-t-20">
                        <div class="input-field">
                            <textarea id="ticketMessage" name="ticketMessage" class="materialize-textarea validate" data-error=".errorTicketMessage" data-length="300"></textarea>
                            <label for="ticketMessage">Describa el problema:</label>
                            <div class="errorTicketMessage"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Adjuntar</span>
                                <input name="attachedFile[]" type="file" multiple accept="image/*">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>
                            <input name="terms" type="checkbox"/>
                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m-t-20">
                        <button type="submit" class="waves-effect waves-light btn blue btn-small">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
