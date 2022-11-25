<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Stay - ROOMS</title>
    <!-- linking our common-links file -->
    <?php require('inc/links.php'); ?>
    
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"> </div> 
        
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility three</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
            <?php
                $q = "SELECT * FROM room_type";
                $v = [];
                $ress = selectt($q,$v);              
                $k = count($ress);
                for($i = 1;$i<=$k;$i++){
                    $ii = $ress[$i-1]['room_id'];
                    $nm = $ress[$i-1]['name'];
                    $pr = $ress[$i-1]['price'];
                    $cp = $ress[$i-1]['capacity'];
                    $ds = $ress[$i-1]['description'];

                    $qq = "SELECT f.name FROM features as f WHERE f.fr_id IN (SELECT rt.fr_id FROM rt_feature as rt WHERE rt.room_id=?)";
                    $vv = [$ii];
                    $res = selectt($qq, $vv);

                echo <<<pp
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/1.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">$nm</h5>

                                <div class="features mb-3">
                                    <h6 class="mb-1">Features & Facilities</h6>
                    pp;

                    foreach($res as $r){
                        $temp = $r['name'];
                    echo <<<cc
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                         $temp
                         </span>
                    cc;
                    }
                    echo <<<ww
                                </div>

                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        $cp Persons
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">₹ $pr per night</h6>
                                <form method="POST">
                                <input type="hidden" name="ga" value=$ii>
                                    <input type="submit" name="fun" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2"  value="Book Now" >
                                </form>
                            </div>
                        </div>
                        </div>
                    ww;
                        
                 }
                    ?>
    <!-- mark -->
            </div>
        </div>
    </div> 

    <?php
    if (isset($_POST['fun'])){
        $g = $_REQUEST['ga'];
        $_SESSION['book_room_id'] = $g;
        redirect('room_booking.php');
    }
    ?>


    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>
    
</body>
</html>