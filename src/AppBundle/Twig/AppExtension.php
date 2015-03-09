<?php
namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('file_exists', array($this, 'fileExistsFunction')),
        );
    }

    public function fileExistsFunction($file)
    {
        return file_exists($file);
    }

    public function getName()
    {
        return 'app_extension';
    }
}