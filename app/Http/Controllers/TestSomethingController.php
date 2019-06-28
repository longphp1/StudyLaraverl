<?php
namespace App\Http\Controllers;

class TestSomethingController extends Controller{
    public $myname;
    public function testParam($id){
        echo $id;
    }

}