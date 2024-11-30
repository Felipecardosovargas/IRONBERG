<?php
$images = [
    "https://cdn.animaapp.com/projects/66dcbd19ea1b5ba552a57104/releases/674a8b4cc989915b47db1996/img/depositphotos-230424992-stock-photo-stars-night-sky-background-t-1.png",
    // Repita o link ou adicione novos
];

foreach ($images as $image) {
    echo '<img class="depositphotos_230424" src="' . $image . '" alt="Stars Background">';
}
?>
