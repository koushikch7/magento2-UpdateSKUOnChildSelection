var config = {
    config: {
        mixins: {
            'Magento_ConfigurableProduct/js/configurable': {
                'CHK_UpdateSKUOnChildSelection/js/model/skuswitch': true
            },
            'Magento_Swatches/js/swatch-renderer': {
                'CHK_UpdateSKUOnChildSelection/js/model/swatch-skuswitch': true
            }
        }
    }
};
