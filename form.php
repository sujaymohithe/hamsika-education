<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Online education</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexnew.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="timetable.php">Timetable</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Assignment</a>
      </li><li class="nav-item">
        <a class="nav-link" href="form.php">Contact</a>
      </li>



    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<section class="my-S">
  <div class="py-S">
    <h2 class="text-center"> Contact Form </h2>
  </div>

  <div class="w-50 m-aut0" >
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</lable>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
      <div class="form-group">
          <label>email</lable>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
      <div class="form-group">
            <label>mobile</lable>
              <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label>comments</lable>
                <textarea  class="form-conrol" name="comments">
                </textarea>
              </div>
              <button type="submit" class="btn btn-success">Submit</button>

      </form>
  </div>
</section>
