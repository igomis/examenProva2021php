<?php


use PHPUnit\Framework\TestCase;
use App\Employee;

class GetDepartmentTest extends TestCase
{
        public function testFindDeparmentWorksFine(){
            $query =  require('bootstrap.php');
            $employee = new Employee('10002','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $departament = $employee->getDepartment();
            $this->assertEquals('Sales',$departament);
        }
        public function testFindDeparmentWorksFineWhenMoreThanTwo(){
            $query =  require('bootstrap.php');
            $employee = new Employee('10010','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $departament = $employee->getDepartment();
            $this->assertEquals('Quality Management',$departament);
        }
        public function testFindDeparmentWorksFineWhenFinished(){
            $query =  require('bootstrap.php');
            $employee = new Employee('10021','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $departament = $employee->getDepartment();
            $this->assertFalse($departament);
        }
}
