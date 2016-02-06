<?php

if($_POST["submit"])
{
    $result='<div class="alert alert-success">Form submitted</div>';

    if(!$_POST['name'])
    {
        $error='<br />Please enter your name';
    }
    if(!$_POST['email'])
    {
        $error.='<br />Please enter your email';
    }
    if(!$_POST['comment'])
    {
        $error.='<br />Please enter a comment';
    }

  
  
    if($error)
    {
        $result='<div class="alert alert-danger"><strong>There were error(s) in the form:</strong>'.$error.'</div>';
    }
    else
    {
        
       if( mail("matthacker.alex@gmail.com", "comment from website", 
            "Name: ".$_POST['name']."
             Email: ".$_POST['email']."
             Comment: ".$_POST['comment']))
        {
            $result='<div class="alert alert-success"><strong>Thank you!</strong></div>';
        }
        else
        {
            $result='<div class="alert alert-danger"><strong>Sorry and error occured try again later</strong></div>';
        }
               
    }

}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <meta charset="utf-8" />

    <style>
        .emailform{
            border: 1px solid grey;
            border-radius: 10px;
            margin-top:20px;
        }

        textarea{
            height:25px;
        }
        form{
            padding-bottom: 20px;
        }

    </style>
</head>
<body>



    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3 emailform">

                <h1>My Email Form</h1>
                <?php echo $result; ?>

                <form method="post">
                    <div class="form-group">

                        <label for="name">your name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Your name" />

                        <label for="email">your Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email" />



                    </div>

                    <div class="form-group">

                        <label for="comment">Your Comment:</label>
                        <textarea class="form-control" name="comment"></textarea>

                    </div>

                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="submit" />

                </form>

            </div>
        </div>

    </div>


    <script src="Scripts/bootstrap.min.js"></script>

</body>
</html>
