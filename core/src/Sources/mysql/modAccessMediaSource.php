<?php
namespace MODX\Revolution\Sources\mysql;

use xPDO\xPDO;

class modAccessMediaSource extends \MODX\Revolution\Sources\modAccessMediaSource
{

    public static $metaMap = array (
        'package' => 'MODX\\Revolution\\Sources',
        'version' => '3.0',
        'table' => 'access_media_source',
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
        ),
        'aggregates' => 
        array (
            'Target' => 
            array (
                'class' => 'MODX\\Revolution\\Sources\\modMediaSource',
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
