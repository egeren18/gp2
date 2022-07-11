<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */

$acId = $_GET["aid"] ?? '';

?>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i1" value="1"/>
        <div class="header">Condiciones Económicas / Cambios</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r1" value="0" <?php echo $checked = $matrix1 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r1" value="1" <?php echo $checked = $matrix1 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r1" value="2" <?php echo $checked = $matrix1 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r1" value="3" <?php echo $checked = $matrix1 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r1" value="4" <?php echo $checked = $matrix1 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r1" value="5" <?php echo $checked = $matrix1 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d1" class="ckeditor"><?php echo $matrix1 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a1" class="ckeditor"><?php echo $matrix1 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i2" value="2"/>
        <div class="header">Cambios Legales / Regulatorios / Ambientales Adversos</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r2" value="0" <?php echo $checked = $matrix2 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r2" value="1" <?php echo $checked = $matrix2 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r2" value="2" <?php echo $checked = $matrix2 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r2" value="3" <?php echo $checked = $matrix2 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r2" value="4" <?php echo $checked = $matrix2 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r2" value="5" <?php echo $checked = $matrix2 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d2" class="ckeditor"><?php echo $matrix2 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a2" class="ckeditor"><?php echo $matrix2 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i3" value="3"/>
        <div class="header">Competidores y Acciones Competitivas</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r3" value="0" <?php echo $checked = $matrix3 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r3" value="1" <?php echo $checked = $matrix3 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r3" value="2" <?php echo $checked = $matrix3 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r3" value="3" <?php echo $checked = $matrix3 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r3" value="4" <?php echo $checked = $matrix3 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r3" value="5" <?php echo $checked = $matrix3 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d3" class="ckeditor"><?php echo $matrix3 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a3" class="ckeditor"><?php echo $matrix3 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i4" value="4"/>
        <div class="header">Interrupciones del Negocio (Incluyen interrupciones de suministro, desastres naturales, problemas climáticos)</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r4" value="0" <?php echo $checked = $matrix4 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r4" value="1" <?php echo $checked = $matrix4 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r4" value="2" <?php echo $checked = $matrix4 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r4" value="3" <?php echo $checked = $matrix4 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r4" value="4" <?php echo $checked = $matrix4 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r4" value="5" <?php echo $checked = $matrix4 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d4" class="ckeditor"><?php echo $matrix4 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a4" class="ckeditor"><?php echo $matrix4 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i5" value="5"/>
        <div class="header">Litigios / Problemas de Capital Intelectual</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r5" value="0" <?php echo $checked = $matrix5 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r5" value="1" <?php echo $checked = $matrix5 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r5" value="2" <?php echo $checked = $matrix5 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r5" value="3" <?php echo $checked = $matrix5 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r5" value="4" <?php echo $checked = $matrix5 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r5" value="5" <?php echo $checked = $matrix5 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d5" class="ckeditor"><?php echo $matrix5 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a5" class="ckeditor"><?php echo $matrix5 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i6" value="6"/>
        <div class="header">Estrategia de Fusiones y Adquisiciones / Ejecución / Integración</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r6" value="0" <?php echo $checked = $matrix6 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r6" value="1" <?php echo $checked = $matrix6 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r6" value="2" <?php echo $checked = $matrix6 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r6" value="3" <?php echo $checked = $matrix6 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r6" value="4" <?php echo $checked = $matrix6 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r6" value="5" <?php echo $checked = $matrix6 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d6" class="ckeditor"><?php echo $matrix6 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a6" class="ckeditor"><?php echo $matrix6 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i7" value="7"/>
        <div class="header">Estabilidad Política / Riesgo País</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r7" value="0" <?php echo $checked = $matrix7 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r7" value="1" <?php echo $checked = $matrix7 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r7" value="2" <?php echo $checked = $matrix7 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r7" value="3" <?php echo $checked = $matrix7 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r7" value="4" <?php echo $checked = $matrix7 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r7" value="5" <?php echo $checked = $matrix7 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d7" class="ckeditor"><?php echo $matrix7 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a7" class="ckeditor"><?php echo $matrix7 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i8" value="8"/>
        <div class="header">Cambios no anticipados sobre la demanda de los consumidores / Preferencias</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r8" value="0" <?php echo $checked = $matrix8 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r8" value="1" <?php echo $checked = $matrix8 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r8" value="2" <?php echo $checked = $matrix8 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r8" value="3" <?php echo $checked = $matrix8 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r8" value="4" <?php echo $checked = $matrix8 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r8" value="5" <?php echo $checked = $matrix8 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d8" class="ckeditor"><?php echo $matrix8 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a8" class="ckeditor"><?php echo $matrix8 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i9" value="9"/>
        <div class="header">Inhabilidad de Desarrollo / Nuevos Productos de Mercado</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r9" value="0" <?php echo $checked = $matrix9 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r9" value="1" <?php echo $checked = $matrix9 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r9" value="2" <?php echo $checked = $matrix9 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r9" value="3" <?php echo $checked = $matrix9 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r9" value="4" <?php echo $checked = $matrix9 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r9" value="5" <?php echo $checked = $matrix9 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d9" class="ckeditor"><?php echo $matrix9 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a9" class="ckeditor"><?php echo $matrix9 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i10" value="10"/>
        <div class="header">Actividades Terroristas / Guerra / Malestar</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r10" value="0" <?php echo $checked = $matrix10 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r10" value="1" <?php echo $checked = $matrix10 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r10" value="2" <?php echo $checked = $matrix10 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r10" value="3" <?php echo $checked = $matrix10 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r10" value="4" <?php echo $checked = $matrix10 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r10" value="5" <?php echo $checked = $matrix10 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d10" class="ckeditor"><?php echo $matrix10 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a10" class="ckeditor"><?php echo $matrix10 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i11" value="11"/>
        <div class="header">Baja o alta rotación del personal</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r11" value="0" <?php echo $checked = $matrix11 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r11" value="1" <?php echo $checked = $matrix11 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r11" value="2" <?php echo $checked = $matrix11 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r11" value="3" <?php echo $checked = $matrix11 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r11" value="4" <?php echo $checked = $matrix11 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r11" value="5" <?php echo $checked = $matrix11 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d11" class="ckeditor"><?php echo $matrix11 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a11" class="ckeditor"><?php echo $matrix11 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i12" value="12"/>
        <div class="header">Gran interés de los medios en la entidad o en su dirección</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r12" value="0" <?php echo $checked = $matrix12 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r12" value="1" <?php echo $checked = $matrix12 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r12" value="2" <?php echo $checked = $matrix12 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r12" value="3" <?php echo $checked = $matrix12 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r12" value="4" <?php echo $checked = $matrix12 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r12" value="5" <?php echo $checked = $matrix12 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d12" class="ckeditor"><?php echo $matrix12 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a12" class="ckeditor"><?php echo $matrix12 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i13" value="13"/>
        <div class="header">Dirección excesivamente conservadora u optimista</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r13" value="0" <?php echo $checked = $matrix13 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r13" value="1" <?php echo $checked = $matrix13 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r13" value="2" <?php echo $checked = $matrix13 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r13" value="3" <?php echo $checked = $matrix13 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r13" value="4" <?php echo $checked = $matrix13 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r13" value="5" <?php echo $checked = $matrix13 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d13" class="ckeditor"><?php echo $matrix13 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a13" class="ckeditor"><?php echo $matrix13 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i14" value="14"/>
        <div class="header">Sistema y registros contables deficientes</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r14" value="0" <?php echo $checked = $matrix14 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r14" value="1" <?php echo $checked = $matrix14 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r14" value="2" <?php echo $checked = $matrix14 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r14" value="3" <?php echo $checked = $matrix14 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r14" value="4" <?php echo $checked = $matrix14 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r14" value="5" <?php echo $checked = $matrix14 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d14" class="ckeditor"><?php echo $matrix14 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a14" class="ckeditor"><?php echo $matrix14 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i15" value="15"/>
        <div class="header">N&uacute;mero significativo de transacciones poco usuales o con partes vinculadas</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r15" value="0" <?php echo $checked = $matrix15 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r15" value="1" <?php echo $checked = $matrix15 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r15" value="2" <?php echo $checked = $matrix15 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r15" value="3" <?php echo $checked = $matrix15 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r15" value="4" <?php echo $checked = $matrix15 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r15" value="5" <?php echo $checked = $matrix15 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d15" class="ckeditor"><?php echo $matrix15 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a15" class="ckeditor"><?php echo $matrix15 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i16" value="16"/>
        <div class="header">Estructuras corporativas / operativas poco usuales o complejas</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r16" value="0" <?php echo $checked = $matrix16 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r16" value="1" <?php echo $checked = $matrix16 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r16" value="2" <?php echo $checked = $matrix16 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r16" value="3" <?php echo $checked = $matrix16 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r16" value="4" <?php echo $checked = $matrix16 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r16" value="5" <?php echo $checked = $matrix16 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d16" class="ckeditor"><?php echo $matrix16 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a16" class="ckeditor"><?php echo $matrix16 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i17" value="17"/>
        <div class="header">Controles y dirección débiles</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r17" value="0" <?php echo $checked = $matrix17 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r17" value="1" <?php echo $checked = $matrix17 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r17" value="2" <?php echo $checked = $matrix17 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r17" value="3" <?php echo $checked = $matrix17 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r17" value="4" <?php echo $checked = $matrix17 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r17" value="5" <?php echo $checked = $matrix17 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d17" class="ckeditor"><?php echo $matrix17 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a17" class="ckeditor"><?php echo $matrix17 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i18" value="18"/>
        <div class="header">Cambios tecnológicos que tengan un fuerte impacto en la industria o el negocio</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r18" value="0" <?php echo $checked = $matrix18 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r18" value="1" <?php echo $checked = $matrix18 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r18" value="2" <?php echo $checked = $matrix18 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r18" value="3" <?php echo $checked = $matrix18 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r18" value="4" <?php echo $checked = $matrix18 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r18" value="5" <?php echo $checked = $matrix18 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d18" class="ckeditor"><?php echo $matrix18 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a18" class="ckeditor"><?php echo $matrix18 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i19" value="19"/>
        <div class="header">Posibilidad de ganancias significativas para la dirección, que dependan de resultados financieros favorables o de un buen desempeño</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r19" value="0" <?php echo $checked = $matrix19 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r19" value="1" <?php echo $checked = $matrix19 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r19" value="2" <?php echo $checked = $matrix19 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r19" value="3" <?php echo $checked = $matrix19 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r19" value="4" <?php echo $checked = $matrix19 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r19" value="5" <?php echo $checked = $matrix19 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d19" class="ckeditor"><?php echo $matrix19 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a19" class="ckeditor"><?php echo $matrix19 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i20" value="20"/>
        <div class="header">Problemas con la competencia o la credibilidad de la dirección</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r20" value="0" <?php echo $checked = $matrix20 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r20" value="1" <?php echo $checked = $matrix20 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r20" value="2" <?php echo $checked = $matrix20 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r20" value="3" <?php echo $checked = $matrix20 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r20" value="4" <?php echo $checked = $matrix20 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r20" value="5" <?php echo $checked = $matrix20 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d20" class="ckeditor"><?php echo $matrix20 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a20" class="ckeditor"><?php echo $matrix20 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i21" value="21"/>
        <div class="header">Cambios recientes en la dirección, el personal clave, los contables o los abogados</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r21" value="0" <?php echo $checked = $matrix21 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r21" value="1" <?php echo $checked = $matrix21 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r21" value="2" <?php echo $checked = $matrix21 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r21" value="3" <?php echo $checked = $matrix21 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r21" value="4" <?php echo $checked = $matrix21 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r21" value="5" <?php echo $checked = $matrix21 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d21" class="ckeditor"><?php echo $matrix21 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a21" class="ckeditor"><?php echo $matrix21 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step minimized">
    <div class="step-header">
        <input type="hidden" name="i22" value="22"/>
        <div class="header">Requerimientos de información para las entidades públicas</div>
    </div>
    <div class="step-content grey lighten-5 ac1 one white">
        <div class="p-l-10 p-r-10 p-b-10">
            <div class="row grey lighten-3 ">
                <div class="col s12 m-b-10">
                    <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                    <label>
                        <input type="radio" name="r22" value="0" <?php echo $checked = $matrix22 -> r == 0 ? "checked" : ""; ?>/>
                        <span>No Aplica</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r22" value="1" <?php echo $checked = $matrix22 -> r == 1 ? "checked" : ""; ?>/>
                        <span>Bajo</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r22" value="2" <?php echo $checked = $matrix22 -> r == 2 ? "checked" : ""; ?>/>
                        <span>Bajo - Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r22" value="3" <?php echo $checked = $matrix22 -> r == 3 ? "checked" : ""; ?>/>
                        <span>Moderado</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r22" value="4" <?php echo $checked = $matrix22 -> r == 4 ? "checked" : ""; ?>/>
                        <span>Moderado - Alto</span>
                    </label>
                    <label class="p-l-20">
                        <input type="radio" name="r22" value="5" <?php echo $checked = $matrix22 -> r == 5 ? "checked" : ""; ?>/>
                        <span>Alto</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-l-10 p-r-10 p-b-10">
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                    <textarea name="d22" class="ckeditor"><?php echo $matrix22 -> d; ?></textarea>
                </div>
                <div class="col s12 m6 l6">
                    <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                    <textarea name="a22" class="ckeditor"><?php echo $matrix22 -> a; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
