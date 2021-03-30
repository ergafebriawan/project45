<?php
require "../plugin/login/session.php";

$title = "My Profile";
include "template\header.php";

require "../core/query.php";
$query = new Query();
?>

<div class="container my-3">
    <div class="row d-flex justify-content-center">
        <h3><?= $title ?></h3>
    </div>

    <?php
    foreach ($query->getData('user', 'email', $_SESSION['email']) as $key) {
    ?>
        <div class="row">
            <img src="../asset/img/user.png" alt="profile" class="my-4 mx-auto">
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Username</th>
                    <td><?= $key['username'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td><?= $key['email'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Password</th>
                    <td>xxxxxx <a href="" type="button" class="btn btn-secondary mx-3">Change Password</a></td>
                </tr>
            </tbody>
        </table>

    <?php
    }
    ?>

</div>

<?php
include 'template\footer.php';
?>