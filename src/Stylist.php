<?php
    class Stylist
    {
        private $stylist_name;
        private $stylist_id;

        function __construct($stylist_name, $stylist_id = null)
        {
            $this->stylist_name = $stylist_name;
            $this->stylist_id = $stylist_id;
        }

        function setStylistName ($new_stylist_name)
        {
            $this->stylist_name = (string) $new_stylist_name;
        }

        function getStylistName()
        {
            return $this->stylist_name;
        }

        function getStylistId()
        {
            return $this->stylist_id;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO stylists (name) VALUES ('{$this->getStylistName()}')");
            $this->stylist_id= $GLOBALS['DB']->lastInsertStylistId();
        }

    }

?>
