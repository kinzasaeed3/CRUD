 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table with PHP</title>
  <style>
    .navbar{
      margin-top: -8px !important;
    }
    #nav{
      font-size: 29px !important;
      margin-left: 40px;
      color: red !important;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    #one{
      font-size: 20px;
      margin-left: 10px;
    }
    #one:hover{
      text-decoration: underline red;
      color: red !important;
      font-size: 20px;
      margin-left: 10px;
    }
     
  </style>
  <!--  -->
  <div class="container-fluid   bg-dark">
    <h1 class="text-center text-danger">CURD</h1>
  </div>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-dark"  >
  <div class="container-fluid">
    <a class="navbar-brand text-white  " id="nav" href="#">AD</a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon  "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item py-2">
          <a class="nav-link active text-white" id="one" aria-current="page" href="../curd/index.php">HOME</a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link active text-white"  id="one" aria-current="page" href="../curd/add.php">ADD</a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link active text-white"  id="one" aria-current="page" href="../curd/update.php">UPDATE</a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link active text-white"  id="one" aria-current="page" href="../curd/delete.php">DELETE</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


 