<?php 
if(empty($_SESSION['panier'])){
    $_SESSION['panier'] = array($_GET['id']);
}else{
    array_push($_SESSION['panier'], $_GET['id']);
}


?>
<?php
$title = 'Player';
include('header.php');

?>

<H1 id="title" style="padding:3%; text-align:center; background-color:black"></H1>
<div id="player" class="container"></div>


<!-- Comments -->
<div class="container">
    <!-- Place pour le panier -->
<form action="" method="GET">

<button class="panierBtn" type="submit" name="id">acheter</button>
</form>
<hr>
<h2 >Commentaires</h2>
<hr>
<?php
//include('./controller/controller.php');

$comments = getComments($_GET['id']);
while ($data = $comments->fetch())
{
?>
<div>
<div class="d-flex align-items-baseline">
    <h3 class="mr-2"><?=nl2br(htmlspecialchars($data['username'])); ?></h3>
    <em> le <?= $data['comment_date_fr']; ?></em>
</div>
    <p><?=nl2br(htmlspecialchars($data['comment']));} ?>
    
    
</p>
</div>

<form action="index.php?action=addComment&id=<?= $_GET['id'] ?>" method="post" class="inputComsForm">
    
    <div >
        <label for="comment">Comment</label><br />
        <textarea id="comment" class="comInput" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
</div>
<?php
include('footer.php')
?>