<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 * 
 * @copyright Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
return array(
    array(
        'id' => 'Mage_Webapi',
        'children' => array(
            array(
                'id' => 'customer',
                'title' => 'Manage Customers',
                'module' => 'Mage_Customer',
                'sortOrder' => 20,
                'children' => array(
                    array('id' => 'customer/create', 'title' => 'Create Customer', 'sortOrder' => '30'),
                    array('id' => 'customer/update', 'title' => 'Edit Customer', 'sortOrder' => '10'),
                    array('id' => 'customer/get', 'title' => 'Get Customer', 'sortOrder' => '20'),
                    array('id' => 'customer/delete', 'title' => 'Delete Customer'),
                )
            )
        )
    )
);