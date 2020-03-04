<?php
  session_start();
  require('config.php');
  $login = $_SESSION['login'];
  $task = $tasks1[$_GET['task']];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<link rel='StyleSheet' type='text/css' href='styles.css'>
<meta charset="utf-8">
<meta name="viewport"
		  contect="widht=device-widht, user-scalable=no, initial-scale=1.0, maximus-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
<title><?php echo $task; ?></title>
<script>
</script>
<style>
	body {
		font-family: Georgia, 'Times New Roman', Times, serif;
	}
	#btn {
		padding-left: 0px;
		padding-right: 0px;
		font-size: 16px;
	}
</style>
</head>
<body>
	<header style="widht: 100%">
        <form action="login.php" method="post">
            <input type="submit" style="float: right; margin-top: 20px; margin-right: 40px;" value="Выйти" name="exit" class="btn btn-primary">
        </form>
		<div class="container">
			<p style="font-variant: small-caps;font-size: 40px; text-align: center "><?php echo $login; ?></p>
		</div>
	</header>
	<div style="margin-left:500px; max-width: 100%"><br><br>
        <?php 
            if($access)
                echo "<button style=\"float: right; padding: 6px 42px;\" type=\"button\" class=\"btn btn-primary \">История</button>";
        ?>
		<p style="font-size: 30px;"><?php echo $task; ?> <?php if($access) echo "<button id=\"btn\"> ✎</button>"; ?></p>
		<p style="font-size: 20px;">Описание <?php if($access) echo "<button id=\"btn\"> ✎</button>"; ?></p>
		<p style="font-size: 20px;">Пример <?php if($access) echo "<button id=\"btn\"> ✎</button>"; ?></p>
		<?php
            if($access)
                echo "<p style=\"font-size: 30px;\">Отчёт:</p>";
            else
                echo "<button>Загрузить файл</button>";
        ?>
	</div>
	<div style="max-width: 100px; margin-right: auto; margin-left: auto;">
		<button style="margin-top: 22px; margin-top: 22px;padding-left: 8px;padding-right: 8px;"><a href="../BestProject/index.php">Назад</a></button>
	</div>
</body>
</html>