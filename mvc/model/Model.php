<?php

include_once("model/Book.php");

class Model {
	public function getBookList()
	{
		return array(
			"DBMS" => new Book("DBMS","Ramez Elmasri", "Pearson", "A Database management book."),
			"OS" => new Book("OS", "TOM M.MITCHELL","Mc Graw Hill","machine learning"),
			"DS" => new Book("DS", "Alfred V.Aho","Pearson","Data Structure")
		);
	}
	
	public function getBook($title)
	{
		$allBooks = $this->getBookList();
		return $allBooks[$title];
	}
	
	
}

?>