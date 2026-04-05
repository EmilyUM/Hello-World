<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $genre = htmlspecialchars($_POST['genre']);
    $subject = htmlspecialchars($_POST['subject']);
    $medium = htmlspecialchars($_POST['medium']);
    $year = htmlspecialchars($_POST['year']);
    $museum = htmlspecialchars($_POST['museum']);
} else {
    $title = $description = $genre = $subject = $medium = $year = $museum = "[No Data Received]";
}

?>
<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="utf-8">
    <title>CISC3003 Suggested Exercise 09</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" >
    <link rel="stylesheet" href="css/styles.css" >
</head>
<body>
<?php include 'header.inc.php'; ?>
    
<main>
    <section class="results">
	<h2>Submission Results</h2>
        <table>
      <caption class="results__caption">Art Work Saved</caption>
      <tr>
        <td class="results__label">Title</td>    
        <td class="results__value"><?php echo $title; ?></td>
      </tr>
      <tr>
        <td class="results__label">Description</td>    
        <td class="results__value"><?php echo $description; ?></td>
      </tr>
      <tr>
        <td class="results__label">Genre</td>    
        <td class="results__value"> <?php echo $genre; ?></td>
      </tr>
      <tr>
        <td class="results__label">Subject</td>    
        <td class="results__value"> <?php echo $subject; ?></td> 
      </tr>
      <tr>
        <td class="results__label">Medium</td>    
        <td class="results__value"> <?php echo $medium; ?></td>
      </tr>   
      <tr>
        <td class="results__label">Year</td>    
        <td class="results__value"><?php echo $year; ?></td>
      </tr>  
      <tr>
        <td class="results__label">Museum</td>    
        <td class="results__value"> <?php echo $museum; ?></td>
      </tr>          
    </table>
    
    </section>
</main>       
</body>
</html>
