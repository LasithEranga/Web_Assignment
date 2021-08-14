<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f128951c5.js" crossorigin="anonymous"></script>

    <style>
        .accordion-button:focus {
            z-index: 3;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .1);
        }

        .accordion-button:not(.collapsed)::after {
            background-image: none;
            transform: rotate(-180deg);
        }

        .accordion-button:not(.collapsed)::after {
            background-image: none;
            transform: rotate(-180deg);
        }
    </style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SAMADHI CHILDREN HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-none" id="navbarNavDropdown">
                <ul class="navbar-nav d-lg-none">
                    <li class="nav-item">
                        <div class="accordion-item bg-dark mt-3 border-0" style="box-shadow: none !important;">
                            <p class="" id="headingTwo">
                                <button class="ps-4  accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-fw fa-money"></i><span class="ps-2"> Donations</span>
                                </button>
                            </p>
                            <div id="collapseTwo" class="accordion-collapse collapse bg-dark" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body ps-5 text-white lh-1">
                                    <p>Add Donations</p><br>
                                    <p>View Donations</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                            <p class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-fw fa-users"></i><span class="ps-2"> Staff</span>
                                </button>
                            </p>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body ps-5 text-white lh-1">
                                        <p>Add Staff</p><br>
                                        <p>View Staff</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                            <p class="accordion-header" id="headingFour">
                                <button class="ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa fa-fw fa-child"></i><span class="ps-2">Child<span>
                                </button>
                            </p>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body ps-5 text-white lh-1">
                                    <p>Add Child</p><br>
                                    <p>View Child</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                            <p class="accordion-header" id="headingFive">
                                <button class="ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fa fa-fw fa-male"></i><span class="ps-2">Labours </span>
                                </button>
                            </p>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body ps-5 text-white lh-1">
                                    <p>Add Labours</p><br>
                                    <p>View Labours</p><br>
                                    <p>View Labour Salary</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="dashboard d-flex flex-row ">
        <div class="col-lg-3 vh-100 bg-dark d-none d-lg-block" style="overflow-y: scroll;">
            <div class="accordion " id="accordionExample">
                <div class="text-white py-3 px-4" style="margin-top: 100px;">
                    <i class="fa fa-fw fa-dashboard"></i><span class="ps-2">Overview</span>
                </div>

                <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                    <p class="" id="headingTwo">
                        <button class="ps-4  accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fa fa-fw fa-money"></i><span class="ps-2"> Donations</span><i id="arrow" class="fas fa-caret-down text-white ps-3"></i>
                        </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse bg-dark" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body ps-5 text-white lh-1">
                            <p>Add Donations</p><br>
                            <p>View Donations</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                    <p class="accordion-header" id="headingThree">
                        <button class=" ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fa fa-fw fa-users"></i><span class="ps-2"> Staff</span><i id="arrow" class="fas fa-caret-down text-white ps-3"></i>
                        </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="accordion-body ps-4 text-white lh-1">
                                <p>Add Staff</p><br>
                                <p>View Staff</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                    <p class="accordion-header" id="headingFour">
                        <button class="ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="fa fa-fw fa-child"></i><span class="ps-2">Child<span><i id="arrow" class="fas fa-caret-down text-white ps-3"></i>
                        </button>
                    </p>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body ps-5 text-white lh-1">
                            <p>Add Child</p><br>
                            <p>View Child</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="fa fa-fw fa-male"></i><span class="ps-2">Labours </span><i id="arrow" class="fas fa-caret-down text-white ps-3"></i>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body ps-5 text-white lh-1">
                            <p>Add Labours</p><br>
                            <p>View Labours</p><br>
                            <p>View Labour Salary</p>
                        </div>
                    </div>
                </div>

                <div class="text-white py-3 px-4">
                    <i class="fa fa-fw fa-power-off"></i><span class="ps-2">Logout</span>
                </div>
            </div>
        </div>
        <div class="col-lg-9 vh-100 bg-light d-lg-block">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>