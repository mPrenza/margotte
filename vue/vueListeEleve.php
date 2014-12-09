<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="../style.css">
<html>
    <head>
        <meta charset="utf-8" />
        <title>Margo</title>
    </head>

    <body>

        <header>
            <h1 id="margo">Margo</h1> 
            <h2 id="enseignants">Espace Enseignants</h2>
            <nav id="navHeader">
                <ul id="menuHaut">
                    <li class="menuPHaut" id="compteBtn"><a href="#">Mon Compte</a></li>
                    <li class="menuPHaut" id="deconnect"><a href="#">Deconnexion</a></li>
                </ul>
            </nav>
        </header>
        <nav id="navGauche">
            <ul>
                <h4 id="titreMenuNav">Menu principal<h4>
                        <li class="menuP" id="accueil"><a href="/margotte/vue/vueAccueil.inc.php">Accueil</a></li>
                        <li class="menuP" id="listeEnseignants"><a href="/margotte/vue/vueListeEnseignant.php">Liste enseignants</a></li>
                        <li class="menuP" id="listeEleves"><a href="/margotte/vue/vueListeEleve.php">Liste eleves</a></li>
                        <li class="menuP" id="creerPersonne"><a href="/margotte/vue/vueFormulaire.inc.php">Creer personne</a></li>
                        </ul>
                        </nav>
                        <section>
                            <p>Bonjour</p>
                            <?php
// Déclaration des paramètres de connexion
                            $host = "localhost";

// Généralement la machine est localhost
// c'est-a-dire la machine sur laquelle le script est hébergé

                            $user = "root";

                            $bdd = "margo";

                            $passwd = "joliverie";

// Connexion au serveur
                            mysql_connect($host, $user, $passwd) or die("erreur de connexion au serveur");

                            mysql_select_db($bdd) or die("erreur de connexion a la base de donnees");

// Creation et envoi de la requete
                            $query = "SELECT NOM,PRENOM FROM PERSONNE WHERE role=3";

                            $result = mysql_query($query);

// Recuperation des resultats
                            while ($row = mysql_fetch_row($result)) {
                                $Nom = $row[0];

                                $Prenom = $row[1];

                                echo "<tr>\n<td>$row[0]</td&gt\n<td>$row[1]</td&gt\n</tr>\n";
                            }

// Deconnexion de la base de donnees
                            mysql_close();
                            ?>
                        </section>

                        <footer>
                        </footer>

                        </body>
                        </html>
                        </html>
