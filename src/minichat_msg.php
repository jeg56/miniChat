<?php
include 'minichat_connect.php';

$config = parse_ini_file("../config/config.ini", false);

$max_messages = $config['max_messages'];

$reponse = $bdd->query('SELECT user, message, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation, DATE_FORMAT(date_creation, \'%H:%i:%s\') AS heure FROM minichat ORDER BY ID DESC LIMIT '.$max_messages.'');

while ($donnees = $reponse->fetch()) {

?>
                <tr class="tr1">
                    <td class="td1"><?php echo $donnees['date_creation'];?></td>
                    <td class="td2"><?php echo $donnees['heure'];?></td>
                    <td class="td3"><?php echo $donnees['user'];?></td>
                    <td><b>: </b></td>
                    <td class="td4"><?php echo $donnees['message'];?></td>
                </tr>
<?php
}
$reponse->closeCursor();



?>    