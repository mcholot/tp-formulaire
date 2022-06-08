<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <form name="tp-formulaire" action="formulaire.php" method="post">

<!--********************************************************
                            TITRE
*********************************************************-->
            <center><table>
                <tr>
                    <td><img src="logo.gif"></td>
                    <th class="titre"><H1>Fiche Pédagogique</H1></th>
                </tr>
            </table></center>

<!--********************************************************
                            ENTETE
*********************************************************-->
            <hr width="41%" size="2" color="#BBB">
            <center><table border="0" cellpadding="0">
                <tr>
                    <td class="gauche"><b>M. Gérard Dupont</b></td>
                    <td class="droite">Né le <b>10/05/1954</b> à <b>Paris</b></td>
                </tr>
                <tr>
                    <td colspan="2"><p class="gauche">67, rue du clos fleuri</p></td>
                </tr>
                <tr>
                    <td colspan="2"><p class="gauche">14100 Lisieux</p></td>
                </tr>
                <tr>
                    <td colspan="2"><p class="gauche"><img class="icone" src="icone téléphone.PNG"/>06.83.67.89.14</p></td>
                </tr>
                <tr>
                    <td colspan="2"><p class="gauche"><img class="icone" src="icone mail.PNG"/> <u>g.dupont@free.fr</u></p></td>
                </tr>
            </table></left>
            <hr width="41%" size="2" color="#BBB"></center>

<!--********************************************************
                            TABLEAU
*********************************************************-->
            <center><table border="1" cellpadding="15">
                <tr>
                    <td style="background-color:#BBB" colspan="2"><b>HTML</b></td>
                </tr>
                <tr>
                    <td>Niveau</td>
                    <td>
                        <?php
                            for($i=0;$i<4;$i++)
                            {
                                echo '<input type="button" class="bouton" value="'.$i.'">';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="background-color:#BBB" colspan="2"><b>Programmation</b></td>
                </tr>
                <tr>
                    <td>Intérêt</td>
                    <td>
                        <?php
                            for($i=0;$i<2;$i++)
                            {
                                echo '<input type="button" class="bouton" value="'.$i.'">';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Motivations</td>
                    <td>J'aime la programmation parce que je suis rigoureux, exigeant et créatif</td>
                </tr>
                <tr>
                    <td>Niveau</td>
                    <td>
                        <?php
                            for($i=0;$i<11;$i++)
                            {
                                echo '<input type="button" class="bouton" value="'.$i.'">';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Connaissances</td>
                    <td>css, <b>php</b>, <strike>JavaScript</strike>, <strike>MySQL</strike></td>
                </tr>
                <tr>
                    <td style="background-color:#BBB" colspan="2"><b>Formation</b></td>
                </tr>
                <tr>
                    <td>Motivations</td>
                    <td>Je souhaite améliorer mes compétences en programmation et en <br>
                    gestion de projet afin de pouvoir concevoir et réaliser des sites internet
                    dans le cadre de mon entreprise</td>
                </tr>
            </table></center>
        
<!--********************************************************
                        FIN DU FORMULAIRE
*********************************************************-->
            <p><input type="reset" value="Envoyer" /></p>
        </form>
    </body>
</html>