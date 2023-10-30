<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vermont test</title>
    <meta name="author" content="Liam Casey">
    <meta name="description" content="testing your vermont trivia">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header>
        <h1>begin testing your trivia here</h1>
        <nav>
            <a href = "vermonthistory.html">Historytest</a>
        </nav>
    </header>
<?php


$leader = $_POST['leader'];
$country = $_POST['whichcountry'];
$join = $_POST['whenjoin'];


do {
    // Generate a random folder name
    $randomfolderPath = rand();
    $folderPath = $randomfolderPath;
} while (file_exists($folderPath));

// Create a folder with the unique name
$mkdirCommand = escapeshellcmd("mkdir " . $folderPath);
$outputMkdir = shell_exec($mkdirCommand);

$sourceCodeFile = "vermonthistory.cpp";

// Copy the source code file to the folder
$copyCommand = escapeshellcmd("cp $sourceCodeFile $folderPath");
$outputCopy = shell_exec($copyCommand);

// Compile and run the C++ program
$cppCompileCommand = "g++ -std=c++1y -o vermonthistory.exe $sourceCodeFile";
$cppRunCommand = "./vermonthistory.exe " . $leader . " " . $country . " " . $join;
$cppExecutionCommand = "cd $folderPath;$cppCompileCommand;$cppRunCommand;cd ..";
$outputCpp = shell_exec($cppExecutionCommand);

echo $outputCpp;

// Delete the folder after the code has run
$deleteCommand = "rm -r " . $folderPath;
$outputDelete = shell_exec($deleteCommand);
$outputpy = shell_exec("python piechart.py --code " . $outputcpp);
echo $outputpy
?>


</body>
</html>
