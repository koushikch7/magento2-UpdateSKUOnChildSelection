<?php

namespace CHK\UpdateSKUOnChildSelection\Plugin\ConfigurableProduct\Block\Product\View\Type;

use Magento\ConfigurableProduct\Block\Product\View\Type\Configurable as MagentoConfigurable;

/**
 * Class Configurable
 * @package CHK\UpdateSKUOnChildSelection\Plugin\ConfigurableProduct\Block\Product\View\Type
 */
class Configurable
{
    /**
     * @param MagentoConfigurable $subject
     *
     * @param $result
     * @return false|string
     */
    public function afterGetJsonConfig(MagentoConfigurable $subject, $result)
    {

        $jsonResult = json_decode($result, true);
        $jsonResult['skus'] = [];
        foreach ($subject->getAllowProducts() as $simpleProduct) {
            $jsonResult['skus'][$simpleProduct->getId()] = $simpleProduct->getSku();
        }
        return json_encode($jsonResult);
    }
}
