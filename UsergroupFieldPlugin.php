<?php
/**
 * Usergroup Field plugin for Craft CMS
 *
 * Allow to select usergroups
 *
 * @author    Québec Studio
 * @copyright Copyright (c) 2017 Québec Studio
 * @link      http://quebecstudio.com
 * @package   UsergroupField
 * @since     1.0.0
 */

namespace Craft;

class UsergroupFieldPlugin extends BasePlugin
{

    public function init()
    {
        parent::init();
    }

    public function getName()
    {
         return Craft::t('Usergroup Field');
    }

    public function getDescription()
    {
        return Craft::t('Usergroups selection as checkboxes');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/quebecstudio/usergroupfield/blob/master/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/quebecstudio/usergroupfield/master/releases.json';
    }

    public function getVersion()
    {
        return '1.0.1';
    }

    public function getSchemaVersion()
    {
        return '1.0.1';
    }

    public function getDeveloper()
    {
        return 'Québec Studio';
    }

    public function getDeveloperUrl()
    {
        return 'http://quebecstudio.com';
    }

    public function hasCpSection()
    {
        return false;
    }
}
