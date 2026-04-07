<?php
$listings = [
  [
    "id" => 1,
    "title" => "Квартира у моря",
    "price" => 120,
    "image" => "https://images.unsplash.com/photo-1505691938895-1758d7feb511",
  ],
  [
    "id" => 2,
    "title" => "Вилла с видом на море",
    "price" => 300,
    "image" => "https://images.unsplash.com/photo-1560185007-c5ca9d2c014d",
  ],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Жильё на Ривьере</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Жильё у моря</h1>

<?php foreach ($listings as $item): ?>
  <a href="listing.php?id=<?=$item['id']?>">
    <div class="card">
      <img src="<?=$item['image']?>" />
      <h3><?=$item['title']?></h3>
      <p><?=$item['price']?> € / ночь</p>
    </div>
  </a>
<?php endforeach; ?>

</body>
</html>
