<?php
namespace Emizentech\ShopByBrand\Model;
class BrandFactory
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;
    protected $eavConfig;

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager,\Magento\Eav\Model\Config $eavConfig)
    {
        $this->_objectManager = $objectManager;
        $this->eavConfig = $eavConfig;
    }
    /**
     * Create new country model
     *
     * @param array $arguments
     * @return \Magento\Directory\Model\Country
     */
    public function create(array $arguments = [])
    {
        return $this->_objectManager->create('Emizentech\ShopByBrand\Model\Items', $arguments, false);
    }
    public function getManufacturers()
    {
        $attributeCode = 'brandgroup';
        $attribute = $this->eavConfig->getAttribute('catalog_product', "$attributeCode");
        $attributeArray=array();
        foreach ($attribute->getSource()->getAllOptions(true, true) as $option) {
             $attributeArray['label']= $option['label'];
             $attributeArray['value']= $option['value'];
             $retr[]=$attributeArray;
        }
        return $retr;
    }
}
