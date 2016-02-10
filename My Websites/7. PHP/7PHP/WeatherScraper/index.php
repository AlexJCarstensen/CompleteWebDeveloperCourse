


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    
    <meta charset="utf-8" />

    <style>

        html, body{
            height:100%;
        }
     .container{
         background-image: url("Pictures/weather-forecast_0.jpg");
         background-size:cover;
         background-position:center;
         width: 100%;
         height:100%;
         padding-top:150px;
     }

     .center{
         text-align:center;
     }
     .white{
         color:white;
     }

    </style>
</head>
<body>



    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3 center">

             
                <h1 class="white">Weather Predictor</h1>

                <p class="lead white" >Enter a city below to get a forecast weather</p>

                <form>

                    <div class="form-group">


                        <input type="text" class="form-control" name="city" id="city" placeholder="eg. London, Paris, Aarhus"/> 
                        
                    </div>
                    
                    <button class="btn btn-success btn-lg" id="findMyWeather">Find My Weather</button>

                </form>



                    

            </div>
        </div>

    </div>

    <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>

    <script>

        $("#findMyWeather").click(function(event)
        {
            event.preventDefault();

            if ($("#city").val() != "") 
            {
                $.get("scraper.php?city="+("#city").val(), function(data){
                    alert(data);
                });
            }
            else
            {
                alert("please enter a city")
            }

           
            });
        

    </script>

</body>
</html>
