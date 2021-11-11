<?php


use PHPUnit\Framework\TestCase;
use App\Employee;

class GetTitleTest extends TestCase
{
        public function testFindTitleWorksFine(){
            $query =  require('bootstrap.php');
            $employee = new Employee('10002','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $title = $employee->getTitle();
            $this->assertEquals('Staff',$title);
        }
        public function testFindTitleWorksFineWhenMoreThanTwo(){
            $query =  require('bootstrap.php');
            $employee = new Employee('10005','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $title = $employee->getTitle();
            $this->assertEquals('Senior Staff',$title);
        }
        public function testFindDeparmentWorksFineWhenFinished(){
            $query =  require('bootstrap.php');
            $employee = new Employee('10021','1968-01-12','Ignasi','Gomis','M','1988-12-10');
            $title = $employee->getTitle();
            $this->assertFalse($title);
        }
}
