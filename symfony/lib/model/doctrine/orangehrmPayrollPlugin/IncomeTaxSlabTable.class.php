<?php

/**
 * IncomeTaxSlabTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class IncomeTaxSlabTable extends PluginIncomeTaxSlabTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object IncomeTaxSlabTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('IncomeTaxSlab');
    }
}