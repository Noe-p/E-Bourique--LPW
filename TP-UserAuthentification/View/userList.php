<?php
require('header.php');
if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
    if (!$user->getAdmin()) {
        header('Location: ./index.php?ctrl=user&action=unauthorized');
    }

    if (isset($_SESSION['user'])) {
        $connection = new Connection();
        $db = $connection->getDb();
        $userManager = new UserManager($db);
    }
}
?>
<section class="listUser">
    <table>
        <h1>Liste des Utilisateurs :</h1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Code Postale</th>
                <th>Ville</th>
                <th>Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($userManager->findAll() as $user) {
                echo "
                <tr>
                    <td>" . $user['id'] . "</td>
                    <td>" . $user['lastName'] . "</td>
                    <td>" . $user['firstName'] . "</td>
                    <td>" . $user['email'] . "</td>
                    <td>" . $user['address'] . "</td>
                    <td>" . $user['postalCode'] . "</td>
                    <td>" . $user['city'] . "</td>
                    <td>" . $user['admin'] . "</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</section>

<?php require('footer.php'); ?>


<style>
    .listUser{
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .listUser table, .listUser td {
        border: 1px solid #333;
    }

    .listUser td, .listUser th{
        padding: 10px;
    }

    .listUser thead, .listUser tfoot {
        background-color: #333;
        color: #fff;
    }
</style>