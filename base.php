<?php require_once 'components/ti.php' ?>
<html>
<?php startblock('style') ?>
<link rel="stylesheet" href="static/bootstrap/css/bootstrap_lumen.css"  />
<?php endblock() ?>
<body>
<!-- header -->
<?php startblock('header') ?>
<?php include 'components/header.php' ?>
<?php endblock() ?>

<!-- footer -->
<?php startblock('header') ?>
<?php include 'components/footer.php' ?>
<?php endblock() ?>

<?php startblock('tailscript') ?>
<script src="static/bootstrap/js/jquery-2.1.1.js" > </script>
<script src="static/bootstrap/js/bootstrap3.js" > </script>
<script src="static/bootstrap/js/angular.js" > </script>
<script type="text/javascript">
	document.write("Done atleast run this time");

</script>
<?php endblock() ?>
</body>
</html>