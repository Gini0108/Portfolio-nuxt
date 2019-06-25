<?php

class ArticleMapper {
  private $PDO;

  public function __construct(PDO $PDO) {
    $this->PDO = $PDO;
  }

  public function find(int $id) {
    $stmt = $this->PDO->prepare("SELECT `id`, `title`, `content` FROM `article` WHERE `id` LIKE :id");
    $stmt->bindParam('id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $stmt->bindColumn('id', $id);
    $stmt->bindColumn('title', $title);
    $stmt->bindColumn('content', $content);
    $stmt->fetch();

    $article = new Article();
    $article->setId($id);
    $article->setTitle($title);
    $article->setContent($content);

    return $article;
  }

  public function save(Article $article) {
    $stmt = $this->PDO->prepare("INSERT INTO `article` (`title`, `content`, `id`) VALUES (:title, :content, :id) ON DUPLICATE KEY UPDATE `title` = :title, `content` = :content");
    $stmt->bindParam(':content', $article->getContent(), PDO::PARAM_STR);
    $stmt->bindParam(':title', $article->getTitle(), PDO::PARAM_STR);
    $stmt->bindParam(':id', $article->getId(), PDO::PARAM_INT);
    $stmt->execute();
  }

  public function remove(Article $article) {
    $stmt = $this->PDO->prepare("DELETE FROM `article` WHERE `id` = :id");
    $stmt->bindParam('id', $article->getId(), PDO::PARAM_INT);
    $stmt->execute();
  }
}
