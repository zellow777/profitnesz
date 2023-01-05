<?php
$images = scandir("assets/trainers/photos", 1);
$trainingtypes = file("assets/trainers/trainingtypes.txt", FILE_IGNORE_NEW_LINES);
$i = 0;

while($i!=9) {
    ?>
    <div class="image">
        <img src="assets/trainers/photos/<?=$images[$i]?>" alt="">
        <div class="details">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <h2><span><?=str_replace(".jpg","", $images[$i])?></span></h2>
            <div class="more">
                <a href="#" class="read-more"<span><?=$trainingtypes[$i]?></span></a>
            </div>
        </div>
    </div>
    <?php
    $i+=1;
}
?>