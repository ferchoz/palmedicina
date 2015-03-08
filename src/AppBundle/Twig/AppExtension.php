<?php
namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('checkImage', array($this, 'checkImageFunction')),
        );
    }

    public function checkImageFunction($url)
    {
        return (bool) @fopen($url, 'r');
    }

    public function getName()
    {
        return 'app_extension';
    }
}