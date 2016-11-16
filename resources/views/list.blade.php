<style media="screen">
  body{
    background-color:  grey ;
    color:  #17202a ;
  }
</style>

<h1>Page Title</h1>
<ul>
<?php foreach ($persons as $person):
echo "<li>$person->name</li>";
?>

<?php endforeach; ?>
</ul>
