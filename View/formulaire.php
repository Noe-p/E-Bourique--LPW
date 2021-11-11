<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>
        Manager Entité
    </title>
    <meta name="viewport" content="width=device-width">
    <link href="View/formulaire.css" rel="stylesheet">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet">
</head>

<body>
    <div class="sign-card">
        <header>
            <h1>Création/Modification d'un User</h1>
        </header>
        <hr />
        <section id="main-section">
            <form action="index.php" method="POST">
                <label>Mail</label>
                <input type="email" name="email" placeholder="Mail.." />
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="Mot de passe..">
                <label>Nom</label>
                <input type=" text" name="lastName" placeholder="Nom.." />
                <label>Prénom</label>
                <input type="text" name="firstName" placeholder="Prénom.." />
                <label>Adresse</label>
                <input type="text" name="address" placeholder="Adresse.." />
                <label>Code Postal</label>
                <input type="text" name="postalCode" placeholder="Code Postal.." />
                <label>Ville</label>
                <input type="text" name="city" placeholder="Ville.." />
                <input type="submit" class="submit-btn" value="Créer/Valider"> 
            </form>
        </section>
    </div>
</body>

</html>