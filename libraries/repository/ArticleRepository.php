<?php

class ArticleRepository {
  private $articleMapper;

  public function __construct(ArticleMapper $articleMapper) {
    $this->articleMapper = $articleMapper;
  }

  public function find(int $id = null, string $search = null) {
    $article = $this->articleMapper->find($id, $search);
  }

  public function save(Quote $quote) {
    $this->articleMapper->save($user);
  }

  public function delete(Quote $quote) {
    $this->articleMapper->delete($user);
  }
}
