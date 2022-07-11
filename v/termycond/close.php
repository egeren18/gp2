
<?php
$_termy = mysqli_query($connection, "
                    SELECT * FROM   termycond
                    WHERE termycondId = '" . $termycondId. "' AND
                    statusId = 4
                    ");
$tconta = 0;                
while ($termy = $_termy -> fetch_object()){
    $tconta++;
}

if ($tconta == 4)
{?>
<form action="../c/termycond.php?m=end&termycondId=<?php echo $termycondId?>&iid=<?php echo $iid ;?>&clientId=<?php echo $clientId;?>&serviceId=<?php echo $serviceId;?>" method="post">
<div class="row">
    <div class="col s12 m-t-10">
        <div class="card m-l-10 m-r-10">
             <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                 <!-- cintillo de color -->
                 <ul class="collection">
                        <li class="collection-item blue-grey lighten-2 white-text">Cerrar Terminos y Condiciones :</li>
                    </ul>
                 <!-- end cintillo de color -->
                <!-- contenido de la caja -->
                     <div class="row">
                       
                                               
                        <div class="col m5 offset-m1 l4 m-t-10">
                            <label class="">
                                <input value="1"  type="radio" name="de" id="de" required >
                                <span>Cerrar el T&C</span>
                            </label><br>
                         
                        </div>        
                        
                        <div class="col s12 m-t-10">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
                        </div>
                 
                   
                        <div class="col s12 m-t-20">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                  
                       
                       
                       
                     </div>
                <!-- contenido de la caja -->
             </div>  
        </div>    
    </div>
</div>
</form>
<?php }
?>
