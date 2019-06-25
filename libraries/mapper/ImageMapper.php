<?php

class ImageMapper {
  private $PDO;

  public function __construct(PDO $PDO) {
    $this->PDO = $PDO;
  }

  public function find(int $id) {
    $stmt = $this->PDO->prepare("SELECT `id`, `title`, `alternative`, `source` FROM `image` WHERE `id` LIKE :id");
    $stmt->bindParam('id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $stmt->bindColumn('id', $id);
    $stmt->bindColumn('title', $title);
    $stmt->bindColumn('source', $source);
    $stmt->bindColumn('alternative', $alternative);
    $stmt->fetch();

    $image = new Image();
    $image->setId($id);
    $image->setTitle($title);
    $image->setSource($source);
    $image->setAlternative($alternative);

    return $image;
  }

  public function save(Image $image) {
    $stmt = $this->PDO->prepare("INSERT INTO `image` (`id`, `alternative`, `title`, `source`) VALUES (:id, :alternative, :title, :source) ON DUPLICATE KEY UPDATE `alternative` = :alternative, `title` = :title, `source` = :source");
    $stmt->bindParam(':alternative', $image->getAlternative(), PDO::PARAM_STR);
    $stmt->bindParam(':source', $image->getSource(), PDO::PARAM_STR);
    $stmt->bindParam(':title', $image->getTitle(), PDO::PARAM_STR);
    $stmt->bindParam(':id', $image->getId(), PDO::PARAM_INT);
    $stmt->execute();
  }

  public function remove(Image $image) {
    $stmt = $this->PDO->prepare("DELETE FROM `image` WHERE `id` = :id");
    $stmt->bindParam('id', $image->getId(), PDO::PARAM_INT);
    $stmt->execute();
  }
}
