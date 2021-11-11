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
    public function getTitle():String
    {
       // retorna el title actual del empleat
    }

    /**
     * @return string
     */
    public function getDepartment():String
    {
        // retorna el nom del departament actual de l'empleat
    }

    /**
     * @return boolean
     */
    public function isManager():Boolean
    {
        // retorna si és manager de departament
    }

    public static function Members(String $dep):Array
    {
        // retorna un array de empleats on estan tots el membres actuals del departament
        // el manager de departament el primer
        // la resta ordenats per antiguetat en el departament
        return [];
    }

    public static function Managers():Array
    {
        // retorna un array de empleats on estan tots els que tenen titol Manager i estiguen actius
        // ordenats per antiguetat en la empresa
        return [];
    }


}