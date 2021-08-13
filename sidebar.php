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
                                    <i class="fa fa-fw fa-money"></i><span  class="ps-2"> Donations</span>
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
                                <i class="fa fa-fw fa-users"></i><span  class="ps-2"> Staff</span>
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
                                    <i class="fa fa-fw fa-child"></i><span  class="ps-2">Child<span>
                                    </button>
                                </p>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ps-5 text-white lh-1">
                                        <a href="./add_child.php">Add Child</a><br>
                                        <a href="./view_child.php">View Child</a><br>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                                <p class="accordion-header" id="headingFive">
                                <button class="ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fa fa-fw fa-male"></i><span  class="ps-2">Labours </span>
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
        <div class="col-lg-2 vh-100 bg-dark d-none d-lg-block"  style="overflow-y: scroll;">
            <div class="accordion " id="accordionExample">
                <div class="text-white py-3 px-4" style="margin-top: 100px;">
                    <i class="fa fa-fw fa-dashboard"></i><span class="ps-2">Overview</span>
                </div>

                <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                    <button class="ps-4  accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fa fa-fw fa-money"></i><span  class="ps-2"> Donations</span><i id="arrow" class="fas fa-caret-down text-white ps-3"></i>
                    </button>
                    <div id="collapseTwo" class="accordion-collapse collapse bg-dark" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body ps-5 text-white lh-1">
                            <p> <a href="home.php?add_doner">Add Donations</a></p><br>
                            <p>View Donations</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                    <p class="accordion-header" id="headingThree">
                    <button class=" ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa fa-fw fa-users"></i><span  class="ps-2"> Staff</span><i id="arrow" class="fas fa-caret-down text-white ps-3"></i>
                    </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="accordion-body ps-4 text-white lh-1">
                                <p><a href="home.php?add_staff">Add Staff</a></p><br>
                                <p>View Staff</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                    <p class="accordion-header" id="headingFour">
                    <button class="ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="fa fa-fw fa-child"></i><span  class="ps-2">Child<span><i id="arrow" class="fas fa-caret-down text-white ps-3"></i>
                    </button>
                    </p>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body ps-5 text-white lh-1">
                            <p><a href="home.php?add_child">Add Child</a></p><br>
                            <p><a href="./view_child.php">View Child</a></p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-dark border-0" style="box-shadow: none !important;">
                    <h2 class="accordion-header" id="headingFive">
                    <button class="ps-4 accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <i class="fa fa-fw fa-male"></i><span  class="ps-2">Labours </span><i id="arrow" class="fas fa-caret-down text-white ps-3"></i>
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body ps-5 text-white lh-1">
                            <p><a href="home.php?add_labour">Add Labours</a></p><br>
                            <p>View Labours</p><br>
                            <p>View Labour Salary</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-white py-3 px-4" >
                    <i class="fa fa-fw fa-power-off"></i><span class="ps-2">Logout</span>
                </div>
            </div>  
        </div>