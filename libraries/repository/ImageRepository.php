<?php

class ImageRepository {
  private $imageMapper;

  public function __construct(ImageMapper $imageMapper) {
    $this->imageMapper = $imageMapper;
  }

  public function find(int $id) {
    return $this->imageMapper->find($id);
  }

  public function save(Image $image) {
    $this->imageMapper->save($image);
  }

  public function remove(Image $image) {
    $this->imageMapper->remove($image);
  }
}
