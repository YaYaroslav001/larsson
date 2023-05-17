
<!-- Вариант без подзагрузки -->

<!--?php

  $con = mysqli_connect('localhost','root','');
  if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con,"mydb");
  $sql="SELECT * FROM card ORDER BY date DESC";
  $result = mysqli_query($con,$sql);

  while ($row = mysqli_fetch_array($result)) {
    echo "<div class=\"card\">
    <b>{$row['user']}</b>
    {$row['date']}<hr>
    <p>{$row['text']}</p>
    </div>";
  }

  mysqli_close($con);
?-->

<?php

$limit = 10;

$dbh = new PDO('mysql:dbname=mydb;host=localhost', 'root', '');

$page = intval(@$_GET['page']);
$page = (empty($page)) ? 1 : $page;
$start = ($page != 1) ? $page * $limit - $limit : 0;
$sth = $dbh->prepare("SELECT * FROM `card` ORDER BY date DESC LIMIT {$start}, {$limit}");
$sth->execute();
$items = $sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($items as $row) {
  echo "<div class=\"card\">
  <b>{$row['user']}</b>
  {$row['date']}<hr>
  <p>{$row['text']}</p>
  </div>";
}
?>
