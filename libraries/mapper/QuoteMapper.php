<?php

class QuoteMapper {
  private $PDO;

  public function __construct(PDO $PDO) {
    $this->PDO = $PDO;
  }

  public function find(int $id = null, string $search = null) {
    if ($id && $search) $sql = "SELECT `id`, `author`, `content` FROM `quotes` WHERE `id` = :id AND `content` LIKE :search LIMIT 1";
    else if ($search) $sql = "SELECT `id`, `author`, `content` FROM `quotes` WHERE `content` LIKE :search LIMIT 1";
    else if ($id) $sql = "SELECT `id`, `author`, `content` FROM `quotes` WHERE `id` = :id LIMIT 1";
    else $sql = "SELECT `id`, `author`, `content` FROM `quotes` WHERE 1 order by RAND() LIMIT 1";

    $stmt = $this->PDO->prepare($sql);
    if ($search) $stmt->bindParam('search', $search, PDO::PARAM_INT);
    if ($id) $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $stmt->bindColumn('id', $id);
    $stmt->bindColumn('author', $author);
    $stmt->bindColumn('content', $content);
    $stmt->fetch();

    $quote = new Quote();
    if ($id) $quote->setId($id);
    if ($author) $quote->setAuthor($author);
    if ($content) $quote->setContent($content);

    return $quote;
  }

  public function save(Quote $quote) {
    //A save function
  }

  public function delete(Quote $quote) {
    //A delete function
  }
}
