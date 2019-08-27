<?php
session_start();

$config = parse_ini_file("../config/config.ini", false);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>MiniChat</title>        
    </head>

    <body>
    <header>
        <h1>MiniChat</h1>
    </header>
<!--                                                                    Formulaire                                                                    -->
        <section id="block_form">
            <form action="minichat_post.php" method="post">
                <table>
                    <tr>
                        <td><label for="user">Pseudo</label></td>
                        <td><b>:</b></td>
                        <td><input minlength="3" maxlength="14" type="text" name="user" id="user" value="<?php echo $_SESSION['user']; ?>" required="required"/></td>
                    </tr>
                    <tr>
                        <td><label for="message">Message</label></td>
                        <td><b>:</b></td>
                        <td><input maxlength="144" type="text" name="message" id="message" size="70" required="required"/></td>
                    </tr>
                </table>
                <input id="bouton" type="submit" name="submit" value="Envoyer" />
            </form>
        </section>


<!--                                                                   block Message                                                                  -->
        <section id="block_msg">
            <table>
                <?php
                    include "minichat_msg.php";
                ?>
            </table>
        </section>
    </body>
</html>    