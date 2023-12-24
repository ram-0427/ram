@extends('layouts.app') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ITSkillArena</title>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h1 {
    text-align: center;
    margin-top: 20px;
}

a {
    display: block;
    margin: 10px;
    text-decoration: none;
    color: #333;
    transition: color 0.3s ease;
}


a:hover {
  color: blue; 
  font-weight: bold; 
  text-decoration: underline; 
}


table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
}




    </style>
</head>
<body> 
    <h1>TRAINING INSTITUTE</h1>

 
    <a href="{{ url('/faculties') }}">USER</a><br>


</body>
</html>
