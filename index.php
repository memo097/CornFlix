<?php

require('./controller/controller.php');
session_start();
$user_id = isset($_SESSION['user_id']);
if ($user_id ) {
    if (isset($_GET['action'])){
    if ($_GET['action'] == 'home') {
        require('./view/indexView.php');
    }else if ($_GET['action'] == 'cgv'){
        require('./view/cgvView.php');
    }elseif ($_GET['action']== 'faq'){
        require('./view/faqView.php');
    }elseif ($_GET['action']== 'Contact-us'){
        contact();
    }elseif ($_GET['action']== 'profil'){
        require('./view/profileView.php');
    }else if($_GET['action'] == 'categoryFilm'){
        require('./view/categoryFilmView.php');
    }else if($_GET['action'] == 'player'){

        comments();
    }else if($_GET['action'] == 'playerSeries'){
        require('./view/playerSeriesView.php');
    }else if($_GET['action'] == 'categorySerie'){
        require('./view/categorySerieView.php');
    }}else{
        require('./view/indexView.php');
    }
} else if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        login();
    }else if ($_GET['action'] == 'cgv'){
        require('./view/cgvView.php');
    }elseif ($_GET['action']== 'faq'){
        require('./view/faqView.php');
    }elseif ($_GET['action']== 'Contact-us'){
        contact();
    }else if($_GET['action'] == 'subscribe'){
        subscribe();
    }}
 else {
    require('./view/landing.php');
}

//Verify id movie
