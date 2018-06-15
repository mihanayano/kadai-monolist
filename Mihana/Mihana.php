<?php
 
$title = '好きな色はどれでしょう？';
 
$question = array(); 
$question = array('yellow','pink','purple','blue'); 
 
$answer = 'pink';
 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mihana Quiz</title>
</head>
<body>
 
<h2><?php echo $title ?></h2>
<form method="POST" action="Mihana.php">
   <?php foreach($question as $value){ ?>
   <input type="radio" name="question" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer" value="<?php echo $answer ?>">
   <input type="submit" value="anser">
</form>
 
</body>
</html>

<?php
 
$question = $_POST['question']; 
$answer = $_POST['answer'];  
$result = "";

if( ($question == $answer) && (isset($question) == true) && (isset($answer) == true) ){
	$result = "OK！";
}else if((isset($question) == true) && (isset($answer) == true)){
	$result = "NG･･･";
}
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mihana Quiz result</title>
</head>
<body>
 
    <h2>.....</h2>
<?php echo $result ?>

 
</body>
</html>