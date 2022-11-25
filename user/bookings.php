<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Stay - bookings</title>
    <!-- linking our common-links file -->
    <?php require('inc/links.php'); ?>
    
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Bookings  </h2>
        <div class="h-line bg-dark"> </div> 
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quia exercitationem aspernatur sequi facilis <br> reiciendis voluptatibus, commodi repellat quam iusto!
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h4>Booking Details:</h4>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Booking ID</label>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Check-IN</label>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Check-OUT</label>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Status</label>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>
    
</body>
</html>