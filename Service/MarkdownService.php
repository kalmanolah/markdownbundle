<?php
namespace KalmanOlah\MarkdownBundle\Service;

class MarkdownService {
    private $parser;

    public function __construct() {
        $this->parser = new \Parsedown();
    }

    public function getParser()
    {
        return $this->parser;
    }

    public function text($string) {
        return $this->parser->text($string);
    }
}
