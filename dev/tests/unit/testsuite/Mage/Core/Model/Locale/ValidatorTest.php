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
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  unit_tests
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Model_Locale_ValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Mage_Core_Model_Locale_Validator
     */
    protected $_validatorModel;

    public function setUp()
    {
        $localeConfigMock = $this->getMock('Mage_Core_Model_Locale_Config', array());
        $localeConfigMock->expects($this->any())
            ->method('getAllowedLocales')
            ->will($this->returnValue(array('en_US', 'de_DE', 'es_ES')));

        $this->_validatorModel = new Mage_Core_Model_Locale_Validator($localeConfigMock);
    }

    /**
     * @return array
     */
    public function testIsValidDataProvider()
    {
        return array(
            'case1' => array(
                'locale' => 'en_US',
                'valid'  => true
            ),
            'case2' => array(
                'locale' => 'pp_PP',
                'valid'  => false
            ),
        );
    }

    /**
     * @dataProvider testIsValidDataProvider
     * @param string $locale
     * @param boolean $valid
     * @covers Mage_Core_Model_Locale_Validator::isValid
     */
    public function testIsValid($locale, $valid)
    {
        $this->assertEquals($valid, $this->_validatorModel->isValid($locale));
    }
}
