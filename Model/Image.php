<?php

namespace Intarmour\ImageClean\Model;

class Image extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Intarmour\ImageClean\Model\ResourceModel\Image');
    }
}
