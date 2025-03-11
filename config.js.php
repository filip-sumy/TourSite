<?php
header("Content-Type: application/javascript");
//  Подключаемся к базе данных
$db = new PDO("mysql:host=MySQL-8.2;dbname=extremetrips", "root", "");
#$db = new PDO("mysql:host=localhost;dbname=extremet_tour", "extremet_root", "av80y&kYFb4P");

//  Запрос на получение всех данных
if ($query = $db->query("SELECT * FROM extreme_tours")) {

    // Сохраняем все данные в массив
    $tours = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "<pre>";
    print_r($db->errorInfo());
    echo "</pre>";
}
$totalTours = $query->fetchColumn();
?>

<script>
  const totalTours = <?= json_encode($totalTours) ?>;
</script>

