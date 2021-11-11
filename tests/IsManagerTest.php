<?php


use PHPUnit\Framework\TestCase;
use App\Employee;

class IsManagerTest extends TestCase
{
        public function testIsManagerTrue(){
            $query =  require('bootstrap.php');
            $employee = new Employee('110039','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $this->assertTrue($employee->isManager());
        }
        public function testIsManagerFalse(){
            $query =  require('bootstrap.php');
            $employee = new Employee('10005','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $this->assertFalse($employee->isManager());
        }
        public function testManagerWhenFinished(){
            $query =  require('bootstrap.php');
            $employee = new Employee('110022','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $this->assertFalse($employee->isManager());
        }
}
