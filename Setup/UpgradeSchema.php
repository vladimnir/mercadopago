<?php

namespace Sugarcode\Test\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
         $tableName = $setup->getTable('vlad_pay');
        if (version_compare($context->getVersion(), '2.0.0') < 0) {
            // Changes here.
        }

        if (version_compare($context->getVersion(), '2.0.1', '<')) {

            // Changes here.
        }
        if (version_compare($context->getVersion(), '2.0.4', '<')) {
              if ($setup->getConnection()->isTableExists($tableName) == true) {
                $connection = $setup->getConnection();
                 $connection->addColumn(
                    $tableName,
                    'clientid',
                    ['type' => Table::TYPE_INTEGER,'nullable' => false, 'default' => ''],
                    'Client Id'
                ); 
                   $connection->addColumn(
                    $tableName,
                    'clientse',
                    ['type' => Table::TYPE_INTEGER,'nullable' => false, 'default' => ''],
                    'Client Secret'
                ); 
               
                // Changes here.
            }
        }


        $setup->endSetup();

    }
}