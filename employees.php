<?php

// function for getting employees datfrom the json file

function getEmployees()
{
$employees=json_decode(file_get_contents(filename:__DIR__.'/employees.json'),assoc:true);
}

//end of function

//function for getting employees by their id

function getEmployeeById($id)
{

}

//end of function

// function for creating a new employee

function createEmployee($data)
{

}
//  end of function

//function for updating employee

function updateEmployee($data,$id){

}

//end of function

function deleteEmployee($id){

}
//end of function
?>