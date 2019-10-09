<?php

class Book {
	public $title;
	public $author;
    public $description;
    public $publisher;
	
	public function __construct($title, $author, $description, $publisher)  
    {  
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
	    $this->description = $description;
    } 
}

?>