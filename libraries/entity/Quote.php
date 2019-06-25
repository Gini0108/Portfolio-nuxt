<?php

class Quote {
  private $id;
  private $author;
  private $content;

  public function getId() {
    return $this->id;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getContent() {
    return $this->content;
  }

  public function setId(int $id) {
    $this->id = $id;
  }

  public function setAuthor(string $author) {
    $this->author = $author;
  }

  public function setContent(string $content) {
    $this->content = $content;
  }
}
