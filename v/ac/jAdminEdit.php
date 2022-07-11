                            <div class="m-t-20"></div>
                            <div class="row">
                                <div class="col s12">
                                    <label>
                                        <input <?php $checked = $answer -> important == 1 ? "checked" : ""; ?> name="important" type="checkbox" />
                                        <span class="blue-grey-text text-darken-2">Haga click en el recuadro si considera haber hallado una "Situaci&oacute;n Importante"!</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <label>
                                        <input type="checkbox" name="completed" class="validate"/>
                                        <span class="blue-grey-text text-darken-2"><u>Completado</u>, listo para ser revisado!</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m-t-20 m-b-10">
                                    <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                        <i class="material-icons">cancel</i>
                                    </a>
                                    <button type="submit" class="btn blue waves-effect tooltipped m-l-5" data-position="top" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
