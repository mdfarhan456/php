<?php
//connect database
// INSERT INTO `notes` (`sno.`, `title`, `description`, `tstamp`) VALUES (NULL, 'i have to go clg', 'delete after coming from the clg', current_timestamp());
$servername="localhost";
$username="root";
$password="";
$database="notes";

$flag = false;

$con = mysqli_connect($servername, $username, $password, $database);
if(!$con)
{
    die ("failed to connect".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $title = $_POST["title"];
 $description = $_POST["description"];

 $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
 $result = mysqli_query($con, $sql);

 if($result)
 {
   $flag = true;
 }
 else
 {
    echo "notes has not been inserted successfully due to some erroe == >".mysqli_error($con);
 }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.6/css/dataTables.dataTables.min.css">  
</head>
  <body>

  <!-- edit modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
 Edit Modal
</button> -->

<!-- edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iNote</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ContactUS</a>
        </li>
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
if($flag)
{
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>success!</strong> Record has been inserted.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>

<div class="container my-4">
    <h2>Add a Note</h2>
    <form action="/php/crud_app.php" method="POST">
  <div class="mb-3">
    <label for="titile" class="form-label">Note Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
  <label for="desc" class="form-label">Note Description</label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Add Note</button>
</form>
</div>

<div class="container">
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

   <tbody>
    <?php
      $sql = "SELECT * FROM notes";
      $resul = mysqli_query($con, $sql);
      $sno = 0;
      while ($row = mysqli_fetch_assoc($resul)) {
        $sno++;
          echo "<tr>
              <td>$sno</td>
              <td>".$row['title']."</td>
              <td>".$row['description']."</td>
             <td>
                <button type='button' class='edit btn btn-primary'>Edit</button>
                <button type='button' class='btn btn-danger'>Delete</button>
      </td>
          </tr>";
      }
    ?>
  </tbody>
 
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

<!-- DataTables -->
<script src="//cdn.datatables.net/2.3.6/js/dataTables.min.js"></script>

<!-- Initialize DataTable -->
<script>
  $(document).ready(function () {
      $('#myTable').DataTable();
  });
</script>
<script>
  let edits = document.getElementsByClassName('edit');

  Array.from(edits).forEach((element) => {
   element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[1].innerText;
        description = tr.getElementsByTagName("td")[2].innerText;
        console.log(title, description);
    });
  });
</script>


  </body>
</html>