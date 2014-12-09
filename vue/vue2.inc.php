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
                <li class="menuP" id="accueil"><a href="#">Accueil</a></li>
                <li class="menuP" id="enseignements"><a href="#">Enseignements</a></li>
                <li class="menuP" id="filieres"><a href="#">Filière</a></li>
				<li class="menuP" id="classes"><a href="#">Classes</a></li>
				<li class="menuP" id="eleves"><a href="#">Elèves</a></li>
            </ul>
        </nav>
        <section>
            <article>                
                <h1 id="compte">Mon compte</h1>

                <form method="post" action="form.html" id="form1">
                    <label for="nom">Nom d'utilisateur</label>
                    <input type="text" name="nom" id="nom" />
                    </br>
                    <label for="prenom">Mot de passe</label>
                    <input type="password" name="prenom" id="prenom" />
                    </br>
                    <label for="email">Adresse Mail</label>
                    <input type="email" name="email" id="email" />
                    </br>
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" id="adresse" />
                    </br>
                    <label for="cp">Code postal</label>
                    <input type="number" name="cp" id="cp" />
                    </br>
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville" />
                    </br>
                    <label for="enfants">J'ai des enfants</label>
                    <input type="checkbox" name="enfants" id="enfants" />
                    </br>
                    <input type="submit" value="Envoyer" id="btnEnvoyer" />
                </form>
            </article>
        </section>

        <footer>
        </footer>

    </body>
</html>
</html>