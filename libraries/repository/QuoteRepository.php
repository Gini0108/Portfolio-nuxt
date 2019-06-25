<?php

class QuoteRepository {
  private $quoteMapper;

  public function __construct(QuoteMapper $quoteMapper) {
    $this->quoteMapper = $quoteMapper;
  }

  public function find(int $id = null, string $search = null) {
    return $this->quoteMapper->find($id);
  }

  public function save(Quote $quote) {
    $this->quoteMapper->save($quote);
  }

  public function remove(Quote $quote) {
    $this->quoteMapper->remove($quote);
  }
}
