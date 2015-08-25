<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Stylist.php";

    $server = 'mysql:host=localhost:8889;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StylistText extends PHPUnit_Framework_TestCase
    {

        function test_getStylistName()
        {
            //Arrange
            $stylist_name = "John Doe";
            $test_Stylist = new Stylist($stylist_name);

            //Act
            $result = $test_Stylist->getStylistName();

            //Assert
            $this->assertEquals($stylist_name, $result);
        }

        function test_getStylistId()
        {
            //Arrange
            $stylist_name = "John Doe";
            $id = 1;
            $test_Category = new Stylist($stylist_name, $stylist_id);

            //Act
            $result = $test_Stylist->getStylistId();

            //Assert
            $this->assertEquals(true, is_numeric($result));
        }

        function test_save()
        {
            //Arrange
            $stylist_name = "Work stuff";
            $test_Stylist = new Stylist($name);
            $test_Stylist->save();

            //Act
            $result = Stylist::getAll();

            //Assert
            $this->assertEquals($test_Stylist, $result[0]);
        }

    }

?>
