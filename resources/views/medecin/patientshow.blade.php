
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Derma</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->

</head>

<body >
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Nom : {{ $patient->users->name }}</p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <p>Sexe : {{ $patient->sexe }}</p>
                        <p>État : {{ $patient->etat }}</p>
                        <p>Durée de la Maladie :{{ $patient->durée }}</ </p>
                        <hr>
                        <p>Photo de la Maladie :{{ $patient->photo }}</</p>
                    </div>
                </div>
            </div> 
       </div>

  

        <div class="col-md-8">
            <div class="row">
              <div class="col-md-4">  <router-link to>Consultation</router-link>  </div>
              <div class="col-md-4"> <router-link to>Rendez-Vous</router-link> </div>
            </div>
          </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>
