<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class OrdinalizeTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'Ordinalize';
    }

    public function getFilters()
    {
        return array(
            'ordinalize' => new Twig_Filter_Method($this, 'ordinalize'),
        );
    }

    public function ordinalize($number)
    {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');

        if ((($number % 100) >= 11) && (($number % 100) <= 13))
        {
            return $number.'th';
        }
        else
        {
            return $number.$ends[$number % 10];
        }
    }
}
