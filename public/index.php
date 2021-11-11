<?php
    use App\Employee;

    require('../kernel.php');
    $query = require('../bootstrap.php');

    $employees = Employee::Managers();

    loadView('index',compact('employees'));
