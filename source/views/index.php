<?php
$title = "Home";
require ("header.php");
?>
<!-----Container----->
<!-- <?php
     // print_r($result);
     ?> -->
<div class="container">
  <h2>Users</h2>
  <p>The list of users inside the table.</p>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = selectAll("users");
        $i = 1;
        foreach ($result as $user)
        {
        ?>
        <tr>
          <td>1</td>
          <td><?php echo $user['firstName']; ?> </td>
          <td><?php echo $user['lastName']; ?> </td>
          <td><?php echo $user['email']; ?> </td>
        </tr>
        <?php
              }
              $i++;
              ?>
      </tbody>
    </table>
  </div>
</div>


<!-----end of container---->
<?php
require ("footer.php");
?>