<!DOCTYPE html>
<html lang="<?php print($global_language) ?>">
<head>
<meta charset="UTF-8">
<title><?php echo $global_pagetitle; ?></title>
<meta name="description" content="<?php echo $global_pagemeta; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php foreach ($global_stylesheets as $style) : ?>
        <link rel="stylesheet" type="text/css"
	href="css/<?php echo $style; ?>" media="screen">
    <?php endforeach; ?>
    
    <?php foreach ($global_javascript_top as $js) : ?>
        <script src="<?php echo $style; ?>"></script>
    <?php endforeach; ?>

</head>
<body>
<?php include 'includes/global_messaging_system.incl.php';?>
<?php include 'view/navigation.php';?>