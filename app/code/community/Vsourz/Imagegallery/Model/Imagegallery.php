<?php
class Vsourz_Imagegallery_Model_Imagegallery extends Mage_Core_Model_Abstract{
	public function getImageCollection($catId){
		$categoryId = $catId;
		$imageCollection = Mage::getModel('imagegallery/imagedetail')->getCollection()
		->addFieldToFilter('status','1')
		->addFieldToFilter('category_id',$categoryId);
		return $imageCollection;
	}
	public function getCategoryCollection($catId){
		$categoryId = $catId;
		$categoryCollection = Mage::getModel('imagegallery/imagecategory')->getCollection()
		->addFieldToFilter('imagecategory_id',$catId);
		return $categoryCollection;
	}
}