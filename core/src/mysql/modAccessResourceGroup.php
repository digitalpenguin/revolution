<?php
namespace MODX\Revolution\mysql;

use xPDO\xPDO;

class modAccessResourceGroup extends \MODX\Revolution\modAccessResourceGroup
{

    public static $metaMap = array (
        'package' => 'MODX\\Revolution\\',
        'version' => '3.0',
        'table' => 'access_resource_groups',
        'extends' => 'MODX\\Revolution\\modAccess',
        'fields' => 
        array (
            'context_key' => '',
        ),
        'fieldMeta' => 
        array (
            'context_key' => 
            array (
                'dbtype' => 'varchar',
                'precision' => '100',
                'phptype' => 'string',
                'null' => false,
                'default' => '',
                'index' => 'fk',
            ),
        ),
        'indexes' => 
        array (
            'context_key' => 
            array (
                'alias' => 'context_key',
                'primary' => false,
                'unique' => false,
                'type' => 'BTREE',
                'columns' => 
                array (
                    'context_key' => 
                    array (
                        'length' => '',
                        'collation' => 'A',
                        'null' => false,
                    ),
                ),
            ),
            'principal_class' => 
            array (
                'alias' => 'principal_class',
                'primary' => false,
                'unique' => false,
                'type' => 'BTREE',
                'columns' => 
                array (
                    'principal_class' => 
                    array (
                        'length' => '',
                        'collation' => 'A',
                        'null' => false,
                    ),
                    'target' => 
                    array (
                        'length' => '',
                        'collation' => 'A',
                        'null' => false,
                    ),
                    'principal' => 
                    array (
                        'length' => '',
                        'collation' => 'A',
                        'null' => false,
                    ),
                    'authority' => 
                    array (
                        'length' => '',
                        'collation' => 'A',
                        'null' => false,
                    ),
                ),
            ),
        ),
        'aggregates' => 
        array (
            'Target' => 
            array (
                'class' => 'MODX\\Revolution\\modResourceGroup',
                'local' => 'target',
                'foreign' => 'id',
                'owner' => 'foreign',
                'cardinality' => 'one',
            ),
            'Context' => 
            array (
                'class' => 'MODX\\Revolution\\modContext',
                'local' => 'context_key',
                'foreign' => 'key',
                'cardinality' => 'one',
                'owner' => 'foreign',
            ),
        ),
    );
}
