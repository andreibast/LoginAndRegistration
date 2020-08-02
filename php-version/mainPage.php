
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


       <style>
            body{
            margin: 0 auto;
            padding: 0;
            background-image: url(img/ugur-akdemir-FABH5NJEMGM-unsplash.jpg);
            background-size: cover;
            background-attachment: fixed;
            z-index: -1;
            }

        </style>



   </head>
   <body>
   <div class="toast" role="status" aria-live="assertive" aria-atomic="true" data-delay="2000" style="position: absolute; top: 50px; right: 5px;">
        <div class="toast-header">

            <strong class="mr-auto">Welcome</strong>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            You have successfully logged in!
        </div>
    </div>


        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Log Out</a>
            </li>
        </ul>

    <div class="row">
        <div class="container text-center text-white">
            <h4>In the world of PHP developers...</h4>
        
            <img class="img-fluid img-thumbnail" src="img/funnyweb.jpeg" alt="Responsive image" >
        
        </div>
    </div>

    






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function (){
            $(".toast").toast("show")
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
   </body>
   </html>
   




