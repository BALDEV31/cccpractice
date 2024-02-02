<?php
class Book{
    public $title;
    public $author;

    public function __construct($title,$author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function displayBook(){
        echo "TITLE : {$this->title} , AUTHOR : {$this->author}";
    }
}
class Library{
    private $Book=[];

    public function addBook(Book $book){
        $this->Book[] = $book;
    }

    public function displayAllBooks(){
        foreach($this->Book as $book){
            $book->displayBook();
            echo "<br>";
        }
    }

}
$book1 = new Book("The Catcher in the Rye","J.D. Salinger");

$book2 = new Book("To Kill a Mockingbird","Harper Lee");

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);

$library->displayAllBooks();
?>