<?php

/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_GoogleRecaptcha
 * @copyright   Copyright (c) Mageplaza (http://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\GoogleRecaptcha\Block;

use Magento\Framework\View\Element\Template\Context;
use Mageplaza\GoogleRecaptcha\Helper\Data as HelperData;

class Captcha extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Mageplaza\GoogleRecaptcha\Helper\Data
     */
    protected $_helperData;

    /**
     * Captcha constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Mageplaza\GoogleRecaptcha\Helper\Data $helperData
     * @param array $data
     */
    public function __construct(
        Context $context,
        HelperData $helperData,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_helperData = $helperData;
    }

    /**
     * @return array
     */
    public function getForms()
    {
        $data = array_merge($this->_helperData->getCssSelectors(), $this->_helperData->getFormsFrontend());

        return json_encode($data);
    }

    /**
     * @return mixed
     */
    public function getInvisibleKey()
    {
        return $this->_helperData->getInvisibleKey();
    }

    /**
     * @return array|mixed
     */
    public function getPositionFrontend()
    {
        return $this->_helperData->getPositionFrontend();
    }

    /**
     * @return array|mixed
     */
    public function isCaptchaFrontend()
    {
        return $this->_helperData->isCaptchaFrontend();
    }

    /**
     * @return mixed
     */
    public function getLanguageCode()
    {
        return $this->_helperData->getLanguageCode();
    }

    /**
     * @return array|mixed
     */
    public function getThemeFrontend()
    {
        return $this->_helperData->getThemeFrontend();
    }
}