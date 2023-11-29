<?php
/**
 * @category  Intarmour
 * @package   Intarmour_ImageClean
 * @copyright Copyright (c) 2015 Hungersoft (http://www.hungersoft.com)
 * @license   http://www.hungersoft.com/license.txt Hungersoft General License
 */

namespace Intarmour\ImageClean\Observer;

use Magento\Framework\Event\ObserverInterface;

class Register implements ObserverInterface
{
    /**
     * @var \Intarmour\All\Helper\Data
     */
    protected $helper;

    /**
     * @param \Intarmour\All\Helper\Data $helper
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Intarmour\All\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * Register extension.
     *
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->helper->register('Intarmour_ImageClean', '1.1.1', 'confirm');
    }
}