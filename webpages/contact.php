<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/new.css">

    <title>Contact</title>
</head>

<body onload="drawTable()">
    <!-- Navbar -->

    <!-- Navbar Button -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="../assets/images/brand.png" alt="My Logo" class="rounded-pill">
        </a>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100 justify-content-evenly">
                <a class="nav-link fs-5" href="../index.php">About Me</a>
                <a class="nav-link fs-5" href="../webpages/experience.php">Experience</a>
                <a class="nav-link fs-5" href="../webpages/skills.php">Skills</a>
                <a class="nav-link fs-5" href="../webpages/portfolio-2.php">Portfolio</a>
                <a class="nav-link fs-5 active" href="../webpages/contact.php">Contact</a>
            </div>
        </div>
    </nav>

    <header class="mainHeader" style="background-image: url(../assets/images/contact.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center justify-content-center text-center text-white"
                style="background-color: rgba(0,0,0,0.2);">
                <div class="col-lg-8">
                    <h1 class="display-1 fw-bold">References and Contact</h1>
                    <hr class="bg-white my-5" />
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center py-5">
                <div class="col-6 col-md-4">
                    <img src="../assets/images/handshake.jpg" alt="Me in a red shirt" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-8 my-3">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-6">
                            <h2 class="fw-light">Who I <span class="fw-bold">Know</span></h2>
                            <hr>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center fs-5">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Relationship</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody id="contact-table">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section id="content" class="bg-dark">
        <div class="container-fluid py-5 text-white">
            <div class="row align-items-center justify-content-center text-center py-5">
                <div class="col-lg-8 my-3">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-6">
                            <h2 class="fw-light">My <span class="fw-bold">Resume</span></h2>
                            <hr class="my-5" />
                            <p class="fw-light fs-5">
                                This is where the <a href="../assets/documents/Resume.pdf" class="link-primary">the PDF
                                    Resume</a> goes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <img src="../assets/images/resume.png" alt="Me in a red shirt" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" style="background-image: url(../assets/images/contact.jpg);">
        <div class="container-fluid py-5 text-white vh-100">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h2 class="display-4 fw-bold">Contact Me</h2>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center h-75">
                <div class="col-6">
                    <form action="http://form-test.slccwebdev.com/form-success.php" method="POST" class="h-100"
                        onsubmit="return formValidation()">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" placeholder="Full Name" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" id="email" placeholder="name@example.com" name="email"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Can we contact you back?</label>
                                <div class="form-check">
                                    <input type="radio" name="contact-back" id="yes" value="Yes" checked
                                        class="form-check-input">
                                    <label for="yes" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="contact-back" id="no" value="No" checked
                                        class="form-check-input">
                                    <label for="no" class="form-check-label">No</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comments">Comments:</label>
                                <textarea name="comments" id="comments" rows="3" class="form-control"></textarea>
                            </div>
                            <button type="submit" role="button" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Wesley Reid 2022</p>
        </div>
    </footer>

    <script>
        let innerReferenceTable = "";
        var contacts = [
            { name: "Sharra Shedletsky", relationship: "Manager", email: "sharra.shedletsky@vitac.com" },
            { name: "Renee Guertin", relationship: "Co-Worker", email: "reneeguertin@gmail.com" },
            { name: "Kyle Challis", relationship: "Mentor", email: "kyle.challis@gmail.com" }]

        for (let i = 0; i < contacts.length; i++) {
            innerReferenceTable += "<tr><td>" + contacts[i].name + "</td><td> " + contacts[i].relationship + "</td><td> " + contacts[i].email + "</td></tr>";
        }

        document.getElementById("contact-table").innerHTML = innerReferenceTable;
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script>
        function formValidation() {
            let x = document.getElementById("name").value;
            let y = document.getElementById("email").value;
            if (x === "") {
                alert("Nice try, you gotta put in a name.");
                return false;
            } else if (y === "") {
                alert("How am I suppose to contact you without an e-mail address? By owl? I'm not the Ministry of Magic.");
                return false;
            }
        }
    </script>

</body>

</html>