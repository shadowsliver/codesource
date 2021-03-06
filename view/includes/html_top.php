<!DOCTYPE html>
<html lang="<?php print($controller->GetProperties()->language) ?>">
<head>
<meta charset="UTF-8">
<title><?php echo $controller->GetProperties()->pagetitle; ?></title>
<meta name="description" content="<?php echo $controller->GetProperties()->pagemeta; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php foreach ($controller->GetProperties()->stylesheets as $style) : ?>
        <link rel="stylesheet" type="text/css"
              href="assets/css/<?php echo $style; ?>" media="screen">
    <?php endforeach; ?>
    
    <?php foreach ($controller->GetProperties()->javascript_top as $js) : ?>
        <script src="<?php echo $js; ?>"></script>
    <?php endforeach; ?>

</head>
<body>
<?php include 'view/includes/global_messaging_system.php'; ?>
<?php include 'view/header.php';?>