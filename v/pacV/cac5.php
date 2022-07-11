   <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                               <?php echo $cac5Name;?>
                                            </div>
                                            <div class="collapsible-body">
                                                <?php while ($pac1 = $_pac5 -> fetch_object()) {
                                                
                                                ?>
                                                
                                              
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $pac1 -> pacId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $pac1 -> pap; ?>
                                                            </td>
                                                         
                                                            <td class="center grey lighten-2">
                                                               
                                                                <?php   
                                                                $status = $pac1 -> status;
                                                                switch ($status) {

                                                                    // Completado
                                                                    case 1:  echo "<a href='../c/pac.php?m=create3&pacId={$pac1 -> pacId}&serviceId={$pac1 -> serviceId}&cacId={$pac1 -> cacId}&version={$pac1 -> version}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                    default: echo "<a href='../c/pac.php?m=create3&pacId={$pac1 -> pacId}&serviceId={$pac1 -> serviceId}&cacId={$pac1 -> cacId}&version={$pac1 -> version}'><i class='material-icons green-text'>edit</i></a>"; break;

                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php } ?>
                                            </div>