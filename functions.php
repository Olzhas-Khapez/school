<?php
// 1-есеп: жол "http://" деп басталады ма
function startsWithHttp($str) {
    return strpos($str, 'http://') === 0;
}

// 2-есеп: ТАӘ бойынша жынысты анықтау
function getGender($fio) {
    $parts = preg_split('/\s+/u', trim($fio));     // ТАӘ-ді бөліктерге бөлеміз
    $patronymic = mb_strtolower($parts[2] ?? '');  // үшінші бөлік: әкесінің аты

    $male   = ['ич', 'оглы', 'улы', 'ұлы'];
    $female = ['на', 'кызы', 'қызы'];

    foreach ($male as $end) {
        if (str_ends_with($patronymic, $end)) {
            return 'мужской';
        }
    }
    foreach ($female as $end) {
        if (str_ends_with($patronymic, $end)) {
            return 'женский';
        }
    }
    return 'не определён';
}

// 3-есеп: санның барлық бөлгіштері
function getDivisors($number) {
    $result = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $result[] = $i;
        }
    }
    return $result;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Функции</title>
  <meta charset="utf-8" />
</head>

<body>

  <h2>Задание 1. Строка начинается с http://</h2>
  <?php
  var_dump(startsWithHttp('http://localhost/schoola/')); // bool(true)
  echo '<br>';
  var_dump(startsWithHttp('https://example.com'));       // bool(false)
  ?>

  <hr>

  <h2>Задание 2. Определение пола по ФИО</h2>
  <?php
  echo getGender('Иванов Иван Иванович'), '<br>';    // мужской
  echo getGender('Петрова Анна Сергеевна'), '<br>';  // женский
  echo getGender('Хапез Олжас Асқарұлы'), '<br>';    // мужской
  ?>

  <hr>

  <h2>Задание 3. Делители числа</h2>
  <?php
  echo implode(', ', getDivisors(12)); // 1, 2, 3, 4, 6, 12
  ?>

</body>

</html>