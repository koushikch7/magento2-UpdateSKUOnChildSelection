<?php

namespace CHK\UpdateSKUOnChildSelection\Plugin\Swatches\Block\Product\Renderer;

use Magento\Swatches\Block\Product\Renderer\Configurable as MagentoConfigure;

/**
 * Class Configurable
 * @package CHK\UpdateSKUOnChildSelection\Plugin\Swatches\Block\Product\Renderer
 */
class Configurable
{
    /**
     * @param MagentoConfigure $subject
     *
     * @param $result
     * @return false|string
     */
    public function afterGetJsonConfig(MagentoConfigure $subject, $result)
    {
        $jsonResult = json_decode($result, true);
        $jsonResult['skus'] = [];
        foreach ($subject->getAllowProducts() as $simpleProduct) {
            $jsonResult['skus'][$simpleProduct->getId()] = $simpleProduct->getSku();
        }
        return json_encode($jsonResult);
    }
}
