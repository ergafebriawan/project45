<?php
require "../plugin/login/session.php";

$title = "User Management";
include "template\header.php";

require "../core/query.php";
$query = new Query();
?>

<div class="container my-3">
    <div class="row d-flex justify-content-center">
        <h3><?= $title ?></h3>
    </div>

    <div class="row">
    <a href="" type="button" class="btn btn-success my-3">Add User</a>
    </div>

    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Num.</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach($query->getData('user') as $user){
  ?>
    <tr>
      <th scope="row">1</th>
      <td><?=$user['username']?></td>
      <td><?=$user['email']?></td>
      <td><a href="" type="button" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
    </div>

</div>

<?php
include 'template\footer.php';
?>