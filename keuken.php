<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kooktijd</title>
</head>

<body>
    <div class="container">

        <?php
        include_once './components/header.php'
        ?>
        <div class="px-5">
            <div class="box mt-4 d-flex taimbro-widget">
                <div class="col-12 col-sm-8 taimbro-txt mt-3">
                    <h3>Gerechten</h3>
                    <p>Laat je inspireren door onze verzameling gerechten uit verschillende keukens en geniet van het plezier van koken en het creëren van onvergetelijke smaakervaringen. Of je nu op zoek bent naar een snel en eenvoudig gerecht voor een doordeweekse maaltijd of een indrukwekkend recept voor een speciale gelegenheid, wij hebben voor elk wat wils. Dus duik in onze recepten en laat je smaakpapillen verleiden door de overheerlijke wereld van eten en koken.</p>
                </div>
                <img class=" card-img-top col-12 col-sm-3 taimbro-wimg" src="./assets/images/img-2.jpg" alt="Gerechten">
            </div>




            <!-- {{{{{{{{{{=========== Item ============}}}}}}}}}} -->

            <div class="my-5 d-flex justify-content-start flex-wrap col-md-12">

                <div class="card border-0 col-md-4 p-md-4 p-1  col-6">
                    <img src="./assets/images/item1.png" class="card-img-top" alt="card item">
                    <div class="card-boy pl-0 pt-2">
                        <h2 class="card-txt">De naam van dit gerecht</h2>
                        <div class="d-flex justify-content-start">
                            <div class="d-flex justify-content-start">
                                <i class="fa fa-clock-o menutxt fs6" aria-hidden="true"></i>
                                <p class="px-2 card-title">30 min</p>
                            </div>
                            <div class="d-flex justify-content-start ps-2">
                                <p class="menutxt">.</p>
                                <p class="px-2 card-title">20 person</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 col-md-4 p-md-4 p-1  col-6">
                    <img src="./assets/images/item1.png" class="card-img-top" alt="card item">
                    <div class="card-boy pl-0 pt-2">
                        <h2 class="card-txt">De naam van dit gerecht</h2>
                        <div class="d-flex justify-content-start">
                            <div class="d-flex justify-content-start">
                                <i class="fa fa-clock-o menutxt fs6" aria-hidden="true"></i>
                                <p class="px-2 card-title">30 min</p>
                            </div>
                            <div class="d-flex justify-content-start ps-2">
                                <p class="menutxt">.</p>
                                <p class="px-2 card-title">20 person</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 col-md-4 p-md-4 p-1  col-6">
                    <img src="./assets/images/item1.png" class="card-img-top" alt="card item">
                    <div class="card-boy pl-0 pt-2">
                        <h2 class="card-txt">De naam van dit gerecht</h2>
                        <div class="d-flex justify-content-start">
                            <div class="d-flex justify-content-start">
                                <i class="fa fa-clock-o menutxt fs6" aria-hidden="true"></i>
                                <p class="px-2 card-title">30 min</p>
                            </div>
                            <div class="d-flex justify-content-start ps-2">
                                <p class="menutxt">.</p>
                                <p class="px-2 card-title">20 person</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 col-md-4 p-md-4 p-1 col-6">
                    <img src="./assets/images/item1.png" class="card-img-top" alt="card item">
                    <div class="card-boy pl-0 pt-2">
                        <h2 class="card-txt">De naam van dit gerecht</h2>
                        <div class="d-flex justify-content-start">
                            <div class="d-flex justify-content-start">
                                <i class="fa fa-clock-o menutxt fs6" aria-hidden="true"></i>
                                <p class="px-2 card-title">30 min</p>
                            </div>
                            <div class="d-flex justify-content-start ps-2">
                                <p class="menutxt">.</p>
                                <p class="px-2 card-title">20 person</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 col-md-4 p-md-4 col-6 p-1">
                    <img src="./assets/images/item1.png" class="card-img-top" alt="card item">
                    <div class="card-boy pl-0 pt-2">
                        <h2 class="card-txt">De naam van dit gerecht</h2>
                        <div class="d-flex justify-content-start">
                            <div class="d-flex justify-content-start">
                                <i class="fa fa-clock-o menutxt fs6" aria-hidden="true"></i>
                                <p class="px-2 card-title">30 min</p>
                            </div>
                            <div class="d-flex justify-content-start ps-2">
                                <p class="menutxt">.</p>
                                <p class="px-2 card-title">20 person</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
    include_once './components/footer.php'
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>