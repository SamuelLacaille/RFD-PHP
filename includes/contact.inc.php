<?php
if(!isset($nom)) $nom = "";
if(!isset($prenom)) $prenom = "";
if(!isset($mail)) $mail = "";
if(!isset($commentaire)) $commentaire = "";
?>



<h1>Contact</h1>

<form method="post" action="index.php?page=login">



    <div>
        <label for="nom">Nom&nbsp;: </label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>" />
    </div>
    <div>
        <label for="prenom">Prenom&nbsp;: </label>
        <input type="text" id="prenom" name="prenom" value="<?=$prenom?>" />
    </div>
    <div>
        <label for="mail">Adresse mail&nbsp;: </label>
        <input type="text" id="mail" name="mail" value="<?=$mail?>" />
    </div>

    <div>
        <label for="commentaire">Laissez nous un commentaire</label>

        <textarea id="commentaire" name="commentaire" value="<?=$commentaire?>"
                  rows="5" cols="33">

        </textarea>
    </div>



    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="barnabe" />
</form>