<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profitnesz</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <!-- CSS for full calender -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
    <!-- JS for jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS for full calender -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/profitnesz-logo.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#trainingtypes">Edzéstípusok</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galéria</a></li>
                    <li class="nav-item"><a class="nav-link" href="#trainers">Edzőink</a></li>
                    <li class="nav-item"><a class="nav-link" href="#prices">Áraink</a></li>
                    <li class="nav-item"><a class="nav-link" href="#aboutus">Rólunk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kapcsolat</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Carousel-->
    <section id="page-top">
        <div id="carousel" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#caroulCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/slides/slide1.jpg" class="d-block w-100" alt="slide1">
                    <div class="carousel-caption">
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" href="#classesModal">Órarend megtekintése</button>
                        <h5>Üdvözlünk a weblapunkon</h5>
                        <p>Küzd le a korlátaidat, az edzésen és a terem falain kívül! Segitűnk elérni a legjobb formád.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/slides/slide2.jpg" class="d-block w-100" alt="slide2">
                    <div class="carousel-caption">
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"  href="#classesModal">Órarend megtekintése</button>
                        <h5>Jóga, Pilates, Gerinctréning</h5>
                        <p>Testi, lelki, szellemi felfrissülés</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/slides/slide3.png" class="d-block w-100" alt="slide3">
                    <div class="carousel-caption">
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" href="#classesModal" href="#classesModal">Órarend megtekintése</button>
                        <h5>Spinning & Spinracing</h5>
                        <p>Önfeledt tekerés és mindent elsöprő energia szint vár rád</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Training types Grid-->
    <section class="page-section bg-light" id="trainingtypes">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Ismerd meg edzésformáink</h2>
                <h3 class="section-subheading text-muted">Próbáld ki magad mindegyikben.</h3>
            </div>
            <section class="hexagon-gallery">
                <?php include 'trainingtypes.php';?>
            </section>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section>
    <!-- gallery-->
    <section class="page-section gallery" id="gallery">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Galéria</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, veritatis.</h3>
        </div>
        <?php include 'gallery.php';?>
    </section>
    <!-- Trainers-->
    <section class="page-section" id="trainers">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">A mi csodálatos csapatunk</h2>
                <h3 class="section-subheading text-muted">Ismerd meg milyen edzés formákon találkozhatsz velük!</h3>
            </div>
            <div class="container-trainer">
                <div class="row-trainer">
                    <?php include 'trainers.php';?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section>
    <!-- Prices-->
    <section class="page-section" id="prices">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Áraink</h2>
                <h3 class="section-subheading text-muted">Termünkben különböző bérlet és napijegy tipusok közül választhatsz!</h3>
            </div>
            <section class="pricing py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-muted text-uppercase text-center">Egy alkalmas napijegy</h5>
                                    <br>
                                    <h6 class="card-title text-muted text-uppercase text-center">Normál:</h6>
                                    <h6 class="card-price text-center">1.700FT<span class="period">/alkalom</span></h6>
                                    <h6 class="card-title text-muted text-uppercase text-center">Diák:</h6>
                                    <h6 class="card-price text-center">1.400FT<span class="period">/alkalom</span></h6>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Bármely edzésre érvényes</strong>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>A napijegy csak a vásárlás napján kerülhet felhasználásra</strong>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Az órarendtől eltérő edzésekre csak a napijegy érvényes</strong>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-muted text-uppercase text-center">Tíz alkalmas bérlet</h5>
                                    <br>
                                    <h6 class="card-title text-muted text-uppercase text-center">Normál:</h6>
                                    <h6 class="card-price text-center">15.000FT<span class="period">/bérlet</span></h6>
                                    <h6 class="card-title text-muted text-uppercase text-center">Diák:</h6>
                                    <h6 class="card-price text-center">12.000FT<span class="period">/bérlet</span></h6>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Bármely edzésre érvényes</strong>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>A bérletet felhasználására 6 hét áll rendelkezésre</strong>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Kedvezmény az egy alkalmas jegyhez képest: 200ft/alkalom</strong>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-muted text-uppercase text-center">Tízenöt alkalmas bérlet</h5>
                                    <br>
                                    <h6 class="card-title text-muted text-uppercase text-center">Normál:</h6>
                                    <h6 class="card-price text-center">21.000FT<span class="period">/bérlet</span></h6>
                                    <h6 class="card-title text-muted text-uppercase text-center">Diák:</h6>
                                    <h6 class="card-price text-center">17.000FT<span class="period">/bérlet</span></h6>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Bármely edzésre érvényes</strong>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>A bérletet felhasználására 8 hét áll rendelkezésre</strong>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Kedvezmény az egy alkalmas jegyhez képest: 300ft/alkalom</strong>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-muted text-uppercase text-center">Húsz alkalmas bérlet</h5>
                                    <br>
                                    <h6 class="card-title text-muted text-uppercase text-center">Normál:</h6>
                                    <h6 class="card-price text-center">26.000FT<span class="period">/bérlet</span></h6>
                                    <h6 class="card-title text-muted text-uppercase text-center">Diák:</h6>
                                    <h6 class="card-price text-center">20.000FT<span class="period">/bérlet</span></h6>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Bármely edzésre érvényes</strong>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>A bérletet felhasználására 10 hét áll rendelkezésre</strong>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Kedvezmény az egy alkalmas jegyhez képest: 400ft/alkalom</strong>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
    </section>
    <!-- Aboutus-->
    <section class="page-section" id="aboutus">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Történetünk</h2>
                <h3 class="section-subheading text-muted">Bonyhád első fitnesz terme.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/aboutus/aboutus1.png" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2017</h4>
                            <h4 class="subheading">A kezdetek</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Amikor csak tervezés, álmodozás szintjén volt a terem, egy olyan mozgásközpont létrehozását céloztam meg, ahol barátságos környezet várja a sportolni vágyó vendégeket...ahol kortól, nemtől, edzettségi szinttől függetlenül, mindenki bizalommal fordulhat az oktatókhoz/edzőkhöz.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/aboutus/aboutus2.png" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Folyamatos fejlődés, megújjulás.</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Már a kezdetektól fogva a csoportos foglalkozásokra fókuszáltunk. Az évek előrehaladtával fogozatosan fejlődött a terem által kínált mozgásformák változatossága, és edzők.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/aboutus/aboutus3.png" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Egy igazi közössége válás</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Számos program került megrendezésre, az elmúlt évek során. A legkülönbözőbb alkalmakkor tálálkoztunk, akár a termen kívül is egy közös élményre.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/aboutus/aboutus4.png" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">A bővülés időszaka</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">A nagy érdéklődésnek köszönhetően az idei évben megtehettünk egy hatalmas lépést a Profitnesz életében, és egy új termet rendezhettünk, hogy párhuzamosan is futhassanak edzéseink.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Légy a
                            <br />
                            történetünk
                            <br />
                            részese!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="flex-container">
            <div class="flex-child" id="info">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contacts</h2>
                    <h3 class="section-subheading">Keress minket ha bármilyen kérdésed van</h3>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +36 30 567 88</p>
                    </div>
                    <div class="container">
                        <section class="mx-auto my-5" style="max-width: 23rem;">

                            <div class="card map-card">
                                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11025.614249621342!2d18.5279024!3d46.3018222!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa2cfea5363f4e87d!2sProfitnesz!5e0!3m2!1shu!2shu!4v1672325164477!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="flex-child">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Írj nekünk</h2>
                        <h3 class="section-subheading">Add meg adataid és írj nekünk egy rövid üzenetet</h3>
                    </div>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="row align-items-stretch mb-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- Name input-->
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div class="form-group">
                                    <!-- Email address input-->
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-group mb-md-0">
                                    <!-- Phone number input-->
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-textarea mb-md-0">
                                    <!-- Message input-->
                                    <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center text-white mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Trainingtype Modals-->
    <!-- trainingtype item 1 modal popup-->
    <div class="training-modal modal fade" id="trainingtypeModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/other/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, eos excepturi impedit labore libero, maxime quibusdam reprehenderit saepe sit soluta atque aut autem cumque deserunt dolore doloremque doloribus ducimus  quasi quia recusandae tempore tenetur! Accusamus aperiam culpa laborum magnam nesciunt nisi saepe soluta, unde voluptates. Alias, consequatur cumque delectus dicta doloremque eveniet, fugiat illo labore molestiae nemo non nulla sit tempore. Accusantium aperiam consectetur culpa dicta dolor ex exercitationem harum impedit libero modi nihil nostrum officia, pariatur possimus provident repellat sed sint sit tempora tempore. Ducimus hic minima repudiandae.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Edzők:</strong>
                                        lorem ipsum dolor sit amet, consectetur
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- classes modal popup-->
    <div class="classes-modal modal fade" id="classesModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="list_modal">
                <div class="container" id="calendar_container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="container-btns">
                    <button class="btn btn-primary btn-xl text-uppercase" id="calendar_close" data-bs-dismiss="modal" type="button">
                        <i class="fas fa-xmark me-1"></i>Close
                    </button>
                    <button class="btn btn-danger btn-xl text-uppercase" id="calendar_admin"type="button">
                        <i class="fa-solid fa-lock"></i>Admin
                    </button>
                </div>
            </div>
                <!-- Start event entry popup dialog box -->
                <div class="modal fade" id="event_entry_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel">Adj hozzá egy új időpontot:</h5>
                            </div>
                            <div class="modal-body">
                                <div class="img-container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="event_name">Esemény neve:</label>
                                                <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Ide irja az esemény nevét">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="event_start_date">Kezdete:</label>
                                                <input type="date" name="event_start_date" id="event_start_date" class="form-control onlydatepicker" placeholder="Kezdete">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="event_end_date">Vége</label>
                                                <input type="date" name="event_end_date" id="event_end_date" class="form-control" placeholder="Vége">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" onclick="close_event_entry_modal()">Vissza</button>
                                <button type="button" class="btn btn-primary" onclick="save_event()">Mentés</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End popup dialog box -->
                <!-- Start user entry popup dialog box -->
                <div class="modal fade" id="user_entry_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel">Adj hozzá egy új időpontot:</h5>
                            </div>
                            <div class="modal-body">
                                <div class="img-container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="event_name">Jelentkező neve:</label>
                                                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Ide irja a jelentkező nevét">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" onclick="close_user_entry_modal()">Vissza</button>
                                <button type="button" class="btn btn-primary" onclick="save_user()">Mentés</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End popup dialog box -->
                <!-- Start display users popup dialog box -->
                <div class="modal fade" id="display_users_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel">A jelentkezők:</h5>
                            </div>
                            <div class="modal-body" id="display_users">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" onclick="close_display_users_modal()">Vissza</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End popup dialog box -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/nav_scripts.js"></script>
    <script src="js/calendar_scripts.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js/lang/es.js'></script>
    <script src="js/gallery_scripts.js"></script>
</body>
</html>

