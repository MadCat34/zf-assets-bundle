<?php

namespace AssetsBundle\Factory\AssetFileFilter;

class JShrinkAssetFileFilterFactory implements \Zend\ServiceManager\Factory\FactoryInterface
{

    /**
     * @param \Interop\Container\ContainerInterface $oServiceLocator
     * @param string $sRequestedName
     * @param array $aOptions
     * @return \AssetsBundle\AssetFile\AssetFileFilter\JsAssetFileFilter\JShrinkAssetFileFilter
     */
    public function __invoke(\Interop\Container\ContainerInterface $oServiceLocator, $sRequestedName, array $aOptions = null)
    {
        return new \AssetsBundle\AssetFile\AssetFileFilter\JsAssetFileFilter\JShrinkAssetFileFilter();
    }

}
