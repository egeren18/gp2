<?php 

$sMs = "localhost";
$uMs = "sagracom";
$pMs = "Sagra2507.";
$dMs = 'sagracom_ronald';

$masterer = new mysqli($sMs, $uMs, $pMs, $dMs);

$_mmodelo = mysqli_query($masterer, "
    SELECT * FROM mmodelo
    WHERE mmodeloId = 1
");

$mmodelo = $_mmodelo -> fetch_object();
$mname = $mmodelo -> texto1 ;
$mname2 = $mmodelo -> texto2 ;
$mname3 = $mmodelo -> texto3 ;
$mname4 = $mmodelo -> texto4 ;

?>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    <?php echo $mname ;?>
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a1" class="ckeditor"></textarea>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    <?php echo $mname2 ;?>
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a2" class="ckeditor"></textarea>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    <?php echo $mname3 ;?>
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a3" class="ckeditor"></textarea>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    <?php echo $mname4 ;?>
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a4" class="ckeditor"></textarea>
    </div>
</li>
