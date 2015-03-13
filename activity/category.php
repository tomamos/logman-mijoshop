<?php
/**
 * @package     LOGman
 * @copyright   Copyright (C) 2011 - 2015 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */

/**
 * Category/MijoShop Activity Entity
 *
 * @author  Arunas Mazeika <https://github.com/amazeika>
 * @package Joomlatools\Plugin\LOGman
 */
class PlgLogmanMijoShopActivityCategory extends ComLogmanModelEntityActivity
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'object_table' => 'mijoshop_categories',
            'format'       => '{actor} {action} {object.subtype} {object.type} title {object}'
        ));
        parent::_initialize($config);
    }

    protected function _objectConfig(KObjectConfig $config)
    {
        $config->append(array(
            'subtype' => array('object' => true, 'objectName' => 'MijoShop'),
            'url'     => 'option=com_mijoshop&view=category&cid=' . $this->row
        ));

        parent::_objectConfig($config);
    }
}
