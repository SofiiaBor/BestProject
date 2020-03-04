<?php
  session_start();
  require('config.php');
  if(!isset($_SESSION['login']))
  {
    header('Location: ./login.php');
  }
  $login = $_SESSION['login'];
  $title = 'Главная страница';

  include('header.php');
?>
	<div style="margin-left:500px; max-width: 100%"><br><br>
		<?php
			if($access)
				echo "<button style=\"float: right; padding: 6px 21px;\" type=\"button\" class=\"btn btn-primary \">Добавить курс</button>";
		?>
		<p style="font-size: 30px;">Список курсов</p>
		<?php
			if($access)
				echo "<button style=\"float: right; padding: 6px 42px;\" type=\"button\" class=\"btn btn-primary \">История</button>";
				
			$i = 0;
			foreach($courses as $course){
				//echo "<p><a href=\"./course.php?course={$i}\">{$course}</a></p>";
				echo "<p style=\"font-size: 20px;\"><a href=\"./course.php?course={$i}\">{$course}</a>";
				if ($access)
					echo " <button id=\"btn\"> ✎</button><button id=\"btn\"> ❌</button>";
				echo "</p>";
				$i++;
			}

        ?>	
	</div>
</body>
</html>