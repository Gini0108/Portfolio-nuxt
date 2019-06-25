<?php

class Image {
  private $id;
  private $title;
  private $source;
  private $alternative;

  public function getId() {
    return $this->id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getSource() {
    return $this->source;
  }

  public function getAlternative() {
    return $this->alternative;
  }

  public function setId(int $id) {
    $this->id = $id;
  }

  public function setTitle(string $title) {
    $this->title = $title;
  }

  public function setSource(string $source) {
    $this->source = $source;
  }

  public function setAlternative(string $alternative) {
    $this->alternative = $alternative;
  }
}
