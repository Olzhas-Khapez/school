<!DOCTYPE html>
<html>

<head>
  <title>Массивтермен есептер</title>
  <meta charset="utf-8" />
</head>

<body>

  <h2>Задание 1. Двумерный массив</h2>
  <?php
  $days = [
      'ru' => ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
      'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
  ];

  foreach ($days as $lang => $list) {
      echo "<b>$lang</b><br>";
      foreach ($list as $day) {
          echo $day, '<br>';
      }
  }
  ?>

  <hr>

  <h2>Задание 2. Элементы больше 3, но меньше 10</h2>
  <?php
  $arr = [2, 5, 9, 15, 0, 4];

  foreach ($arr as $value) {
      if ($value > 3 && $value < 10) {
          echo $value, '<br>';
      }
  }
  ?>

  <hr>

  <h2>Задание 3. Поменять местами максимум и минимум</h2>
  <?php
  $nums = [];
  for ($i = 0; $i < 10; $i++) {
      $nums[] = rand(1, 100);
  }
  echo 'До: ', implode(', ', $nums), '<br>'; // бастапқы массив

  $maxKey = array_search(max($nums), $nums); // ең үлкен мәннің кілті
  $minKey = array_search(min($nums), $nums); // ең кіші мәннің кілті

  $tmp = $nums[$maxKey];
  $nums[$maxKey] = $nums[$minKey];
  $nums[$minKey] = $tmp;

  echo 'После: ', implode(', ', $nums); // алмастырудан кейін
  ?>

</body>

</html>