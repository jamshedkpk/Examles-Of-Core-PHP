<html>
<head>
<title>Test</title>
</head>
<body>
<center>
<h2>
<?php    
/*
Function is a block of code which is used to perform a particuler task.
It has three parts 
Function Calling :
It is a calling statement which is used to call a function it is always 
Written outside of the function.
Function Declaration :
It is used to Declare a function for e.g. give name to a function,
Parameters and returnt type.
Function Definition : It is the actual code of a function. It is used 
To perform a particuler tasks.
*/
// Function having no arguments but having return data

// Calling Part
echo("<br>");
echo("The Result Of Your Value Is = ".add());

function add()  // Declaration Part
{                // Defination Part
$a=440;
$b=430;
$result=($a+$b);
return $result;
}
?>  
</h2>
</center>
</body>
</html>