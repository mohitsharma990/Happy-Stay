<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Stay - Details</title>
    <!-- linking our common-links file -->
    <?php require('inc/links.php'); ?>
    
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Profile: </h2>
        <div class="h-line bg-dark"> </div> 
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quia exercitationem aspernatur sequi facilis <br> reiciendis voluptatibus, commodi repellat quam iusto!
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 px-4">
                <div class="bg-white rounded shadow p-4">
                    <div>
                        <h4>Details</h4>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">Full Name :</p>
                        </div>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">Phone No :</p>
                        </div>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">Email :</p>
                        </div>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">Address :</p>
                        </div>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">Date of Birth :</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-5 px-4 mt-5">

                <div class="bg-white rounded shadow p-4">
                    <h4>Change Password</h4>

                    
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Passoword: </label>
                        <input type="text" class="form-control shadow-none">
                    </div>

                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Confirm Passoword: </label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    
                    <div class="fw-bold">
                        <button type="submit" class="btn text-black custom-bg mt-3">Change Password: </button>
                    </div>
            </div>
        </div>
    </div>


    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>
    
</body>
</html>