                            <div class="row">
                                <div class="col s12 m-t-10">
                                    <?php
                                    $reviewerTeam = explode(',', $r_reviewerTeam -> acReviewerTeam);
                                    $doerTeam = explode(',', $r_doerTeam -> acDoerTeam);
                                    $riskPartnerTeam = explode(',', $r_riskPartner -> userId ?? '');
                                    if (in_array($_SESSION["userId"], $reviewerTeam)) {
                                        echo 'soy supervisor';
                                    }
                                    elseif (in_array($_SESSION["userId"], $doerTeam)) {
                                        echo 'soy hacedor';
                                    }
                                    else {
                                        if (in_array($_SESSION["userId"], $riskPartnerTeam)) {
                                            echo "soy socio de riesgo";
                                        }
                                        else {
                                            echo 'no soy socio de riesgo ni pertenezco al equipo';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
