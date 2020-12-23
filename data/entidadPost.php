<?php

class Post{
    private $id;
    private $title;
    private $description;
    private $author;
    private $date;

    //METHODS
    //SETTERS AND GETTERS
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getDate(){
        return $this->date;
    }
    
}
?>