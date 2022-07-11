<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/new.css">

    <title>About Me</title>
</head>

<body>
    <!-- Navbar -->

    <!-- Navbar Button -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="../assets/images/brand.png" alt="My Logo" class="rounded-pill">
        </a>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100 justify-content-evenly">
                <a class="nav-link fs-5 active" href="./index.php">About Me</a>
                <a class="nav-link fs-5" href="./webpages/experience.php">Experience</a>
                <a class="nav-link fs-5" href="./webpages/skills.php">Skills</a>
                <a class="nav-link fs-5" href="./webpages/portfolio-2.php">Portfolio</a>
                <a class="nav-link fs-5" href="./webpages/contact.php">Contact</a>
                <a class="nav-link fs-5" href="./webpages/myPHPactivities.php">PHP Exercises Week 2</a>
            </div>
        </div>
    </nav>

    <header class=" mainHeader" style="background-image: url(../assets/images/about.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center justify-content-center text-center text-white" style="background-color: rgba(0,0,0,0.2);">
                <div class="col-lg-8">
                    <h1 class="display-1 fw-bold">Wesley Reid</h1>
                    <hr class="bg-white my-5" />
                    <figure>
                        <blockquote class="blockquote">
                            <p>"To err is human, but to really foul things up requires a computer."</p>
                        </blockquote>
                        <figcaption class="blockquote-footer text-white">
                            Paul Ehrlich
                        </figcaption>
                    </figure>
                    <button type="button" class="btn btn-primary" onclick="askName()">Click Me</button>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center py-5">
                <div class="col-6 col-md-4">
                    <img src="../assets/images/mug-red-stone-bg.jpg" alt="Me in a red shirt" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-8 my-3">
                    <h2 class="fw-light">Who I <span class="fw-bold">Am</span></h2>
                    <hr class="my-5" />
                    <p class="fw-light fs-5">
                        Aspiring <span class="fw-bold">web developer</span> and <span class="fw-bold">programmer</span>.
                        Motivated leader who enjoys
                        challenges. Possesses <span class="fw-bold">strong communication</span> and
                        motivational skills.
                        Efficient and quick to learn
                        new skills to improve performance. Applies these skills to help and guide others
                        to fulfill
                        their potential.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section id="content" style="background-image: url(../assets/images/about.jpg);">
        <div class="container-fluid py-5">

            <!-- Items Row Start -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
                <!-- Item -->
                <div class="col mb-4">
                    <div class="card bg-light text-center border-light shadow h-100">
                        <div class="card-body">
                            <h3 class="card-title">Early Years</h3>
                            <hr class="bg-primary">
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Facere, dolorum reiciendis, nam adipisci doloremque
                                nesciunt maxime
                                quis deserunt molestiae maiores molestias aut quam dolor! Natus vel
                                voluptates fuga
                                soluta dolor.
                                Sequi, at reprehenderit vel dolores, optio minima reiciendis aspernatur
                                incidunt impedit
                                dolorem tempora, velit autem. A id temporibus, error, consequatur
                                excepturi obcaecati
                                similique ad nisi, fugit ratione perspiciatis? Assumenda, ipsa?
                                Repudiandae voluptatum itaque ducimus enim atque ratione laborum
                                perferendis molestias
                                minima reprehenderit nam id animi ipsum, dolorum dolor ipsam reiciendis
                                earum modi ipsa
                                ex nobis. Consequuntur delectus nihil reprehenderit! Accusantium.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col mb-4">
                    <div class="card bg-light text-center border-light shadow h-100">
                        <div class="card-body">
                            <h3 class="card-title">Later Decline</h3>
                            <hr class="bg-primary">
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Facere, dolorum reiciendis, nam adipisci doloremque
                                nesciunt maxime
                                quis deserunt molestiae maiores molestias aut quam dolor! Natus vel
                                voluptates fuga
                                soluta dolor.
                                Sequi, at reprehenderit vel dolores, optio minima reiciendis aspernatur
                                incidunt impedit
                                dolorem tempora, velit autem. A id temporibus, error, consequatur
                                excepturi obcaecati
                                similique ad nisi, fugit ratione perspiciatis? Assumenda, ipsa?
                                Repudiandae voluptatum itaque ducimus enim atque ratione laborum
                                perferendis molestias
                                minima reprehenderit nam id animi ipsum, dolorum dolor ipsam reiciendis
                                earum modi ipsa
                                ex nobis. Consequuntur delectus nihil reprehenderit! Accusantium.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col mb-4">
                    <div class="card bg-light text-center border-light shadow h-100">
                        <div class="card-body">
                            <h3 class="card-title">Continuing Disasters</h3>
                            <hr class="bg-primary">
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Facere, dolorum reiciendis, nam adipisci doloremque
                                nesciunt maxime
                                quis deserunt molestiae maiores molestias aut quam dolor! Natus vel
                                voluptates fuga
                                soluta dolor.
                                Sequi, at reprehenderit vel dolores, optio minima reiciendis aspernatur
                                incidunt impedit
                                dolorem tempora, velit autem. A id temporibus, error, consequatur
                                excepturi obcaecati
                                similique ad nisi, fugit ratione perspiciatis? Assumenda, ipsa?
                                Repudiandae voluptatum itaque ducimus enim atque ratione laborum
                                perferendis molestias
                                minima reprehenderit nam id animi ipsum, dolorum dolor ipsam reiciendis
                                earum modi ipsa
                                ex nobis. Consequuntur delectus nihil reprehenderit! Accusantium.</p>
                        </div>
                    </div>
                </div>
                <!-- Content Item End -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Wesley Reid 2022</p>
        </div>
    </footer>

    <script src="./scripts/askName.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>