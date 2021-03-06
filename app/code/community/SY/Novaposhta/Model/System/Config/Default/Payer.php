<?php
/**
 * Nova Poshta API 2.0
 * 
 * @author Slava Yurthev
 */
class SY_Novaposhta_Model_System_Config_Default_Payer
{
    public function toOptionArray($isMultiselect = false)
    {
        $options = array(array('value'=>'','label'=>''));
        $helper = Mage::helper('sy_novaposhta');
        if((bool)$helper->getStoreConfig('api_key') !== false && 
            $helper->getStoreConfig('active') == "1"){
            $options[] = array('value'=>'Sender','label'=>$helper->__('Sender'));
            $options[] = array('value'=>'Recepient','label'=>$helper->__('Recepient'));
        }
        return $options;
    }
}