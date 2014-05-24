<?php

namespace KalmanOlah\MarkdownBundle\Twig\Extension;

use KalmanOlah\MarkdownBundle\Service\MarkdownService;

class MarkdownExtension extends \Twig_Extension
{
    private $parser;

    public function __construct(MarkdownService $parser)
    {
        $this->parser = $parser;
    }

    public function getFilters()
    {
        return array(
            'markdown' => new \Twig_Filter_Method($this, 'markdownFilter', array('is_safe' => array('html'))),
        );
    }

    public function markdownFilter($string)
    {
        return $this->parser->text($string);
    }

    public function getName()
    {
        return 'markdown';
    }
}
