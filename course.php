<?php
  session_start();
  require('config.php');
  $login = $_SESSION['login'];
  $course = $courses[$_GET['course']];
  $title = $course;

  include('header.php');
?>
	<div style="margin-left:500px; max-width: 100%"><br><br>
        <?php
            if($access)
                echo "<button style=\"float: right; padding: 6px 12px;\" type=\"button\" class=\"btn btn-primary \">Добавить задачу</button>"

        ?>
		<p style="font-size: 30px;">Список задач</p>
		<?php
            if($access)
                echo "<button style=\"float: right; padding: 6px 42px;\" type=\"button\" class=\"btn btn-primary \">История</button>";

            $i = 0;
            foreach($tasks1 as $task){
                echo "<p style=\"font-size: 20px;\"><a href=\"./task.php?task={$i}\">{$task}</a>";

                if ($access)
                    echo " <button id=\"btn\"> ✎</button><button id=\"btn\"> ❌</button>";
                echo "</p>";
                $i++;
            }
        ?>
	</div>
	<div style="max-width: 100px; margin-right: auto; margin-left: auto;">
		<button style="margin-top: 22px; margin-top: 22px;padding-leftfalse: 8px;padding-right: 8px;"><a href="../BestProject/index.php">Назад</a></button>
	</div>
</body>
</html>