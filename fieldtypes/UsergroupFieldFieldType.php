<?php
/**
 * Usergroup Field plugin for Craft CMS
 *
 * Usergroup FieldType
 *
 *
 * @author    Québec Studio
 * @copyright Copyright (c) 2017 Québec Studio
 * @link      http://quebecstudio.com
 * @package   UsergroupField
 * @since     1.0.0
 */

namespace Craft;

class UsergroupFieldFieldType extends BaseFieldType
{

    public function getName()
    {
        return Craft::t('Group');
    }

    public function defineContentAttribute()
    {
        return AttributeType::Mixed;
    }

    public function getInputHtml($name, $values)
    {
        if (!$values)
            $values = new UsergroupFieldModel();

        $id = craft()->templates->formatInputId($name);
        $namespacedId = craft()->templates->namespaceInputId($id);


         $options = array();
         $usergroups = craft()->userGroups->allGroups;

         foreach ($usergroups as $usergroup){
           $options[$usergroup->id] = $usergroup->name;
         }

      		return craft()->templates->render('_includes/forms/checkboxGroup', array(
            'namespaceId' => $namespacedId,
      			'options' => $options,
      			'values'  => $values
      		));


    }

    public function prepValueFromPost($value)
    {
        return $value;
    }

    public function prepValue($value)
    {
        return $value;
    }
}
