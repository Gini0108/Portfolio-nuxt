<?php

class Article {
  private $id;
  private $title;
  private $content;

  public function __construct() {
    $this->title = "This article does not exist";
  }

  public function getId() {
    return $this->id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getContent() {
    return $this->content;
  }

  public function setId(int $id) {
    $this->id = $id;
  }

  public function setTitle(string $title) {
    $this->title = $title;
  }

  public function setContent(string $content) {
    $this->content = $content;
  }
}
