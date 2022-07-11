<ul class="collapsible m-l-10 m-r-10 ">
    <li>
        <div class="collapsible-header grey lighten-5 blue-grey-text text-darken-2">
            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                Historial de Update
        </div>

        <div class="collapsible-body">
        <table style="width:50%">
        <thead>
          <tr>
              <th>Fecha y Hora </th>
              <th>Usuario</th>
               <th>Cuestionario</th>
          
             
          </tr>
        </thead>

        <tbody>      
        <?php
   $_traza = mysqli_query($master, "SELECT * FROM tracem WHERE serviceId = '" . $serviceId . "'  ");
     while ($client = $_traza -> fetch_object()) {
       $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $client -> userId . "'");
       $user = $_user -> fetch_object();
    
       $_designated = mysqli_query($master, "SELECT * FROM modelo WHERE modeloId = '" . $serviceId . "'");
       $designated = $_designated -> fetch_object();

       $date =  $client -> date; 



       ?>
       
       
          <tr>
            <td><?php echo  $date; ?> </td>
            <td><?php echo $user -> userName;  ?> <?php echo $user -> userSurname;  ?> </td>
            <td><?php echo $designated -> modeloName;  ?></td>

            
          </tr>
          <?php  }  ?>
      
        </tbody>
      </table>                                  
                                      
        </div>
    </li>
 </ul>