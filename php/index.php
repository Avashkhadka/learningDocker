<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        echo "Added to cart: " . $data["name"];
    }

    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datatabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <div class="card  mt-4 shadow p-3 mb-5 bg-body rounded">
            <div class="card-header">
                <h2 class="text-center">Jquery Image hide and unhide</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8"><img src="https://www.avashkhadka.com.np/assets/hero-C6qjaP3j.jpg"
                            class="img-fluid " id="image" alt=""></div>
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <button class="btn btn-primary mb-2" id="hideBtn">
                            Hide Image
                        </button>
                        <button class="btn btn-primary mb-2" id="showBtn">
                            Show Image
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="container">
        <div class="card mt-4 shadow p-3 mb-5 bg-body rounded">
            <div class="card-header bg-danger text-white">
                <h2 class="text-center">Jquery form validation</h2>
            </div>
            <div class="card-body">
                <form action="" id="contactForm">
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="text-danger mb-2" id="nameError"> </span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <span class="text-danger mb-2" id="emailError"> </span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="bookDate">Book Date</label>
                        <input type="date" class="form-control" id="bookDate" name="bookDate">
                        <span class="text-danger mb-2" id="bookDateError"> </span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="bookTime">Book Time</label>
                        <input type="time" class="form-control" id="bookTime" name="bookTime">
                        <span class="text-danger mb-2" id="bookTimeError"> </span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                        <span class="text-danger mb-2" id="messageError"> </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-4.0.0.min.js"
        integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.22.1/jquery.validate.min.js"
        integrity="sha512-qu7dMuIm2f0KcKZ3BOoP4c+Hn+r4E8PbD2Ro4rmKsOyheCxcwhzQpf6SojA76dn+owqfANzfTFUTkGA+HpHjOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>