<?php 
$title = 'Web Shop';
include('header.php')
?>
<?php 
$db = new PDO('mysql:host=localhost;dbname=a70j0_bdd_ehanon', 'root', '');
var_dump($_SESSION['panier']);
?>




<script>
let movieId = '<?=$_GET['id']?>'
console.log(movieId)
fetch(`https://api.themoviedb.org/3/movie/${movieId}/videos?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US`)
    .then(response => response.json())
    .then(data=> {
      showTrailer(data.results)
      document.getElementById("title").innerHTML = data.results[0].name
    })
</script>
<?php 
include('footer.php')
?>