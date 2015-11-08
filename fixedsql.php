<?php

//// Setup Base
$folder 	= ''; //Folder Name
$file 		= $folder ? "$folder/app/Mage.php" : "app/Mage.php";
require_once($file); //Path to Magento
umask(0); Mage::app();
Mage::app()->getStore()->setId(Mage_Core_Model_App::ADMIN_STORE_ID);

/************** Add function **************/

	$installer = new Mage_Core_Model_Resource_Setup;
	
	/*
		category attribute
		$installer = new Mage_Eav_Model_Entity_Setup;
	*/
	$installer = new Mage_Eav_Model_Entity_Setup;
	
try {
	/*
		remove cateogory attribute
		$installer->removeAttribute('catalog_category', 'category_block_position');
	*/
	$installer->removeAttribute('catalog_category', 'catlist');
    
} catch (Exception $e) {
    Mage::logException($e);
}
	
echo 'Done Fixed Make Table!';
	