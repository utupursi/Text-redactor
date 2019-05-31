<!-- <?php 
include 'from-json-to-mysql.php';
echo $_POST['text'];
if (!empty($_FILES)){
move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . "/photo/2.png");
}

global $mysqlConnection;
$servername = "localhost:3306";
$username = "root";
$database = "ku1";
$password = "";
// Create connection
$mysqlConnection = mysqli_connect($servername, $username, $password, $database);

$users = [];
$result = mysqli_query($mysqlConnection, "SELECT * FROM users1");

if ($result && mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}
$sql=mysqli_query($mysqlConnection,"INSERT INTO users1 (photo)
VALUES('photo/1.png')");
?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Summernote</title>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

    <!-- <link href="css/style.css" rel="stylesheet"> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/summernote.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  
  <body>
 <header class="header">
 
   <div class="container">
     <h1 class="text-center text-uppercase">Summernote
     <br /> 
     <small class="text-center">Super simple WYSIWYG editor on Bootstrap</small></h1>
    </div> 
 </header>

 <div class="content">
 <div class="container">
 <h2 class="text-center">Форма</h2>
 <form method="post" enctype="multipart/form-data">
      <div class="form-group">
     <label for="field1">Поле 1</label>
     <input type="text" class="form-control" name="field1" id="field1" placeholder="Введите данные">
   </div>
   
   <div class="form-group">
    <label for="field1">Поле 2</label>
    <input type="text" class="form-control" name="field2" id="field2" placeholder="Введите данные">
   </div>

   <div class="form-group">
    <label for="field1">Поле 2</label>
    <input type="file" name="photo" id="file">
   </div>

   <div class="form-group">
     <label for="text">Текст</label> 
     <textarea class="form-control" name="text" id="text" placeholder="Введите данные"></textarea>
    </div>
   <button type="submit" class="btn btn-default">Отправить</button>
 </form>
 
 </div> 
 </div>     

  </body>
  
</html>