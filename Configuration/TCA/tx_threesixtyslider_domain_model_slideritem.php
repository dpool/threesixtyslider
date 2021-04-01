<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,

        'versioningWS' => 2,
        'versioning_followPages' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'searchFields' => 'title,info1,info1_title,info2,info2_title,info3,info3_title,images,',
        'iconfile' => 'EXT:threesixtyslider/Resources/Public/Icons/tx_threesixtyslider_domain_model_slideritem.gif'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, info1, info1_title, info2, info2_title, info3, info3_title, images, path',
    ),
    'types' => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, info1_title, info1, info2_title, info2, info3_title, info3, images, path, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_threesixtyslider_domain_model_slideritem',
                'foreign_table_where' => 'AND tx_threesixtyslider_domain_model_slideritem.pid=###CURRENT_PID### AND tx_threesixtyslider_domain_model_slideritem.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'info1' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.info1',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'enableRichtext' => true,
                'softref' => 'typolink_tag,images,email[subst],url'
            )
        ),
        'info1_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.info1_title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'info2' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.info2',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'enableRichtext' => true,
                'softref' => 'typolink_tag,images,email[subst],url'
            )
        ),
        'info2_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.info2_title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'info3' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.info3',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'enableRichtext' => true,
                'softref' => 'typolink_tag,images,email[subst],url'
            )
        ),
        'info3_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.info3_title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'images' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.images',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'folder'
            ),
        ),
        'path' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:threesixtyslider/Resources/Private/Language/locallang_db.xlf:tx_threesixtyslider_domain_model_slideritem.path',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
    ),
);

?>