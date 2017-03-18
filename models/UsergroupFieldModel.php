<?php
/**
 * Usergroup Field plugin for Craft CMS
 *
 * UsergroupField Model
 *
 * --snip--
 * Models are containers for data. Just about every time information is passed between services, controllers, and
 * templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 * --snip--
 *
 * @author    Québec Studio
 * @copyright Copyright (c) 2017 Québec Studio
 * @link      http://quebecstudio.com
 * @package   UsergroupField
 * @since     1.0.0
 */

namespace Craft;

class UsergroupFieldModel extends BaseModel
{
    /**
     * Defines this model's attributes.
     *
     * @return array
     */
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'someField'     => array(AttributeType::String, 'default' => 'some value'),
        ));
    }

}