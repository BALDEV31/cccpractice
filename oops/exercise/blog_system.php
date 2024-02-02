<?php
 class Post {
    public $title;
    public $content;

    public function displayInfo() {
        echo "Title: {$this->title}<br>Content: {$this->content}";
    }
}

class Blog {
    private $posts = [];

    public function addPost(Post $post) {
        $this->posts[] = $post;
    }

    public function displayAllPosts() {
        foreach ($this->posts as $post) {
            $post->displayInfo();
            echo "<br>";
        }
    }
}

$post1 = new Post();
$post1->title = "hello guys";
$post1->content = "This is a blog post about PHP.";

$post1->displayInfo();

?>