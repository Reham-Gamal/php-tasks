<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors',1);;

define ('INVALID_INPUT', 'ERROR: invalid input');
define ('INVALID_OPERATOR', 'ERROR: invalid operator');
$input1 = $input2 = $operation = null;
if (isset($_POST['input1']) and  isset($_POST['input2']) and isset($_POST['operation']))
  {

    $input1 = $_POST['input1'];   
    $input2 = $_POST['input2'];
    $operation = $_POST['operation'];
    if(is_numeric($input1) and is_numeric($input2))
    {
       switch ($operation)
       {
       case 'plus':
         $result = $input1 + $input2;
         break;
       case 'minus':
         $result = $input1 - $input2;
         break;
       case 'multi':
         $result = $input1 * $input2;
         break;
       case 'divide':
         $result = $input1 / $input2;
         break;
       default: 
         $result = INVALID_OPERATOR;           
         break;
       }
    }
    else 
    {
        $input1 = '';
        $input2 = '';
        $operation = 'invalid';
        $result = INVALID_INPUT;
    }  
}

?>

<head>
    <title>calc</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="">

<form method='POST'>

<input type='text' name='input1' size='15' value="<?php echo $input1; ?>">

<select name='operation'>
<option <?php if($operation == 'plus') { echo 'selected';} ?> value="plus">+</option>
<option <?php if($operation == 'minus') { echo 'selected';} ?> value="minus">-</option>
<option <?php if($operation == 'multi') { echo 'selected';} ?> value="multi">*</option>
<option <?php if($operation == 'invalid') { echo 'selected';} ?> value="invalid">**</option>
<option <?php if($operation == 'divide') { echo 'selected';} ?> value="divide">/</option>
</select>  

<input type='text' name='input2' size='15' value="<?php echo $input2; ?>">
<span>=</span>
<input type='text' size='50' value="<?php ?>">

<input type='submit' value='go'>

