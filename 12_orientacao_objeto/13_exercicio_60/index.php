<?php

class Task {
    
    public $title;
    public $description;
    public $completed;
    
    function __construct($title, $description, $completed){
        
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }
    
    public function markAsCompleted(){
        $this->completed = true;
    }
    
    public function markAsIncomplete(){
        $this->completed = false;
    }
    
    public function getTitle(){
        
        return $this->title;
    }
    
    public function getDescription(){
        
        return $this->description;
    }
    
    public function isCompleted(){
        
        return $this->completed;
    }
    
}

$x = new Task("telefonar", "ligar para jardineiro", 0);

echo $x->title;
echo $x->completed;
echo $x->getTitle();