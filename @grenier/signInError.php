<?php 
    $title="Erreur Reesayer";
    require_once "./features/head.php" ;
?>
    <div class="fullscreen">
        
        <div class="formulaire">
            <div class="header">
                   <h1>FORMULAIRE</h1> 
            </div>
            <div class="contenu">
                <form action="validationNewMember.php" method="POST">
                    <fieldset class="contenu-about">
                        <legend>About</legend>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom"  required> <br>

                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" id="prenom"  required> <br>

                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" min="12" max="120" placeholder="18"> <br>

                        <label for="sex">sexe</label>
                        <select name="sexe" id="sexe" required>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                            
                    </fieldset>
                    <fieldset class="contenu-account">
                        <legend>Account</legend>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="exemplenom@gmail.com" required><br>

                        <label for="mdp">Mot de passe</label>
                        <input type="password" name="mdp" id="mdp" placeholder="au moins 6 caracteres" required> <br>

                        <label for="cmdp">Confirmer le mot de passe</label>
                        <input type="password" name="cmdp" id="cmdp" required> <br>

                    </fieldset> 

                    <div class="acocher">
                        <p> <input type="checkbox" name="checkcondition" id="checkcondition" required>
                            <label for="checkcondition">j'accepte les conditions d'utilisation</label>
                        </p>
                    </div>
                    <p><button type="submit">Valider</button></p>
                </form>
            </div>
            
            
        </div>
        
    </div>

<?php
    require_once "features/foot.php";
?>