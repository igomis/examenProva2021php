<?php


namespace App;


class Employee
{
    protected $emp_no;
    protected $birth_date;
    protected $first_name;
    protected $last_name;
    protected $gender;
    protected $hire_date;

    /**
     * Employee constructor.
     * @param $emp_no
     * @param $birth_date
     * @param $first_name
     * @param $last_name
     * @param $gender
     * @param $hire_date
     */
    public function __construct($emp_no, $birth_date, $first_name, $last_name, $gender, $hire_date)
    {
        $this->emp_no = $emp_no;
        $this->birth_date = $birth_date;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->hire_date = $hire_date;
    }

    /**
     * @return mixed
     */
    public function getEmpNo()
    {
        return $this->emp_no;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getHireDate()
    {
        return $this->hire_date;
    }

    /**
     * @return string
     */
    public function getTitle():Mixed
    {
       // retorna el title actual del empleat
    }

    /**
     * @return string
     */
    public function getDepartment():Mixed
    {
        // retorna el nom del departament actual de l'empleat
    }

    /**
     * @return boolean
     */
    public function isManager():bool
    {
        // retorna si és manager de departament
    }

    public static function Members(String $dep):Array
    {
        $allMembers = [];
        $query = require('../bootstrap.php');
        foreach ($query->selectWhereOrder('dept_emp','dept_no',$dep,'from_date') as $empleat){
            $e = $query->find('employees','emp_no',$empleat->emp_no);
            $allMembers[] = new Employee($e->emp_no,$e->birth_date,$e->first_name,$e->last_name,$e->gender,$e->hire_date);
        }
        return $allMembers;
    }

    public static function Managers():Array
    {
        // retorna un array de empleats on estan tots els que tenen titol Manager i estiguen actius
        // ordenats per antiguetat
        $query = require('../bootstrap.php');
        $managers = [];
        foreach ($query->selectAll('employees',12) as $e){
            $managers[] = new Employee($e['emp_no'],$e['birth_date'],$e['first_name'],$e['last_name'],$e['gender'],$e['hire_date']);
        }
        return $managers;
    }


}