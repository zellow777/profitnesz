<?php
$images = scandir("assets/traningtypes", 1);
$i = 0;

while($i!=10) {
    echo"<div class='hex'><a href='#trainingtypeModal" . $i+1 . "' data-bs-toggle='modal' >
    <div class='center'><h2><span>" . str_replace('.jpg','', $images[$i]) . "</span></h2></div>
    <img src='assets/traningtypes/" . $images[$i] . "' alt='..'></a>
    </div>";
    $i+=1;
}
