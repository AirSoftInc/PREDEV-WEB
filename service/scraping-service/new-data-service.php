<?php 
    class NewData{
        var $link;
        var $title;
        var $date;
        var $isCase;

        public function __construct($link, $title, $date){
            $this->link = $link;
            $this->title = $title;
            $this->date = $date;
            $this->isCase = false;
        }
    }
?>