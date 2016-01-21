<?php

$pages = array(
    "home", "about"
);
$pages_name = array(
    "Home", "About us"
);

$page = $_GET['page'];


?>

<nav>
    <ul>
        <?php for($i = 0; $i < count($pages); ++$i) : ?>
        <li <?php if($page==$pages[$i] ): ?> class="active" <?php endif; ?> > <a href="?page=<?php print($p); ?>"><?php print($pages_name[$i]) ?></a></li>
        <?php endfor; ?>
    </ul>
</nav>