<?php
  session_start();
  require('config.php');
  $login = $_SESSION['login'];
  $task = $tasks1[$_GET['task']];
  $title = $task;

  include('header.php');
?>
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