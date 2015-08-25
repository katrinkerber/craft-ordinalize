<?php
namespace Craft;

class OrdinalizePlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Ordinalize');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Katrin Kerber';
    }

    public function getDeveloperUrl()
    {
        return 'http://katrinkerber.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.ordinalize.twigextensions.OrdinalizeTwigExtension');

        return new OrdinalizeTwigExtension();
    }
}
