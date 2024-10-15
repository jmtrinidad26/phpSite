<?php require_once './inc/header.php'; ?>
<?php require_once './inc/navBar.php'; ?>

<div class=" mt-4">
    <?php
    // default
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    // add file based on page parameter
    if ($page == 'description') {
        require_once('pages/description.php'); // description
    } else if ($page == 'conclusion') {
        require_once('pages/conclusion.php'); //conclusion
    } else if ($page == 'sampleProg') {
        require_once('pages/sampleProgs.php'); //sampleProgs
    } else if ($page == 'conclusion') {
        require_once('pages/conclusion.php'); //conclusion
    } else if ($page == 'conclusion') {
        require_once('pages/conclusion.php'); // conclusion
    } else if ($page == 'documentation') {
        require_once('pages/documentation.php'); //documentation
    } else if ($page == 'reference') {
        require_once('pages/reference.php'); //reference
    } else if ($page == 'test') {
        require_once('test.php'); // practice coding
    }else if ($page == 'creator') {
        require_once('pages/authors.php'); //creator
    }else {
        require_once('pages/home.php'); // back to home
    }
    ?>
</div>

