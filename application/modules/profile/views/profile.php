<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>  
<?php $this->load->view('template_header');?>

</head>

<body>

    <div class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?=base_url("assets/modules/login/images/neo-rentals-logo.png")?>" width="150" alt="IMG"></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">History</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
    </nav>
    <div class="container my-4">
        <div class="row my-2">
            <div class="col-md-3 col-12"></div>
            <div class="col-md-6 col-12 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12"><b><span class="fw-bold">Room # :</span></b> 5</div>
                            <div class="col-12"><b><span class="fw-bold">Room Type :</span></b> 5</div>
                            <div class="col-12"><b><span class="fw-bold">Room Rate :</span></b> 2,500</div>
                            <div class="col-12"><b><span class="fw-bold">Date Started:</span></b> August 16, 2024</div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12"></div>

        </div>
        <div class="row my-4">
            <div class="col-md-3 col-12"></div>
            <div class="col-md-6 col-12 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12"><b><span class="fw-bold">Room # :</span></b> 5</div>
                            <div class="col-12"><b><span class="fw-bold">Room Type :</span></b> 5</div>
                            <div class="col-12"><b><span class="fw-bold">Room Rate :</span></b> 2,500</div>
                            <div class="col-12"><b><span class="fw-bold">Date Started:</span></b> August 16, 2024</div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12"></div>

        </div>
    </div>

    </div>
 
    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/modules/login/js/login/main.js"></script>

</body>

</html>