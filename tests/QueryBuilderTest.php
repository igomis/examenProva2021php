<?php


use PHPUnit\Framework\TestCase;


class QueryBuilderTest extends TestCase{

    public function testFindWorksFineEmployees(){
        $query =  require('bootstrap.php');
        $resultat = $query->find('employees','emp_no','10006');
        $this->assertEquals('Anneke',$resultat->first_name);
    }
    public function testFindWorksFineDepartments(){
        $query =  require('bootstrap.php');
        $resultat = $query->find('departments','dept_no','d005');
        $this->assertEquals('Development',$resultat->dept_name);
    }
    public function testFindReturnFalseNotFind(){
        $query =  require('bootstrap.php');
        $resultat = $query->find('departments','dept_no','d015');
        $this->assertFalse($resultat);
    }


}
