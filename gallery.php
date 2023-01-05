<div class="container text-center my-3">
    <div class="row mx-auto my-auto justify-content-center">
        <div id="Carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item gallery-item active">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/trainers/photos/zita.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
<?php
    $images = scandir("assets/traningtypes", 1);
    $i = 0;

    while($i!=10) {
        echo'
        <div class=" carousel-item gallery-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/traningtypes/' . $images[$i] . '" alt=".."></a>
                            </div>
                        </div>
                    </div>
                </div>
        ';
        $i+=1;
    }
?>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#Carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#Carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>