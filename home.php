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
            box-shadow: 0 0 0 .25rem rgba(255,255,255,.1);
        }
        .accordion-button:not(.collapsed)::after {
            background-image: none;
            transform: rotate(-180deg);
        }
        .accordion-button:not(.collapsed)::after{
            background-image: none;
            transform: rotate(-180deg);
        }

    
    </style>
    <body>
    <?php include("sidebar.php");  ?>
    
     <div class="col-lg-10 vh-100 bg-light d-lg-block">
     <?php

        //include("overview.php");


    ?>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   
</body>


</html>