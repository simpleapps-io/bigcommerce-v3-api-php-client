<?php


namespace BigCommerce\ApiV3\ResourceModels\Catalog\Product;


use BigCommerce\ApiV3\ResourceModels\ResourceModel;

class PriceAdjuster extends ResourceModel
{
    const ADJUSTER_RELATIVE = 'relative';
    const ADJUSTER_FIXED    = 'fixed';

    public string $adjuster;
    public float $adjuster_value;
}
