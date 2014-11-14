<?php require_once './components/ti.php' ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<head>
<link rel="stylesheet" href="./static/bootstrap/css/bootstrap_lumen.css"  />
</head>

<body>
<!-- header -->
<?php startblock('header') ?>
<?php include 'components/header.php' ?>
<?php endblock() ?>

<!-- content here -->


<!-- footer -->
<?php startblock('header') ?>
<?php include 'components/footer.php' ?>
<?php endblock() ?>

<?php startblock('tailscript') ?>
<script type="text/javascript" src="./static/bootstrap/js/jquery-2.1.1.js" > </script>
<script type="text/javascript" src="./static/bootstrap/js/bootstrap3.js" > </script>
<script type="text/javascript" src="./static/bootstrap/js/angular.js" > </script>

<?php endblock() ?>

</body>
</html>