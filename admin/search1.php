<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <meta  http-equiv="X-UA-compatible" content="IE-edges">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Search data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        
        <form method="POST" >
           
                
                <input type="text" placeholder="search data"
           name=search>
            <button type="Search" class="btn btn-primary">Search</button>
        </form>
    </div>


    <div class="container my-5">
        <table class="table">
            <?php

                if(isset($_POST['submit']))
                {


                    $search=$_post['search'];
                    $sql="select * from files where name='$search'";
                    $result=mysquli_query($con,$sql);
                    if($result){
                        $num=musquli_num_rows($result);
                        eco $num
                    }

                }


?></table></div>
</body>
</html>