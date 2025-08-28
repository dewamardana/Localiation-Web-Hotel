<?php

return [
    'index' => [
        'title'  => '📋 建物データ',
        'table' => [
            'photo'        => '写真',
            'name'         => '名前',
            'description'  => '説明',
            'action'       => '操作',
            'edit'         => '編集',
        ],
    ],

    'form' => [
        'building_image'      => '建物の画像',
        'image_hint'          => '画像をクリックして変更',
        'image_upload'        => 'ファイルをアップロード',
        'upload_hint'         => 'SVG, PNG, JPG, GIF (1:1の比率)',
        'building_name'       => '建物名',
        'description'         => '説明',
    ],

    'create' => [
        'title'               => '建物を追加',
    ],

    'edit' => [
        'title'               => '建物を編集',
    ],

    'controller' => [
        'index' => [
            'title'   => '建物ページ | ダッシュボード',
        ],
        'create' => [
            'title'   => '建物を追加 | ダッシュボード',
            'success_add'   => '建物が正常に追加されました！',
        ],
        'show' => [
            'title'   => '建物の詳細 | ダッシュボード',
        ],
        'edit' => [
            'title'   => '建物を編集 | ダッシュボード',
            'success_update' => '建物が更新されました！',
        ],
        'delete' => [
            'success_delete' => '建物データが削除されました！',
        ],

        'validation' => [
            'building_name_required' => '建物名は必須です。',
            'slug_required'          => 'スラッグは必須です。',
            'slug_unique'            => 'スラッグは既に使用されています。',
            'description_required'   => '説明は必須です。',
            'photo_image'            => 'アップロードされたファイルは画像でなければなりません。',
            'photo_mimes'            => '画像は jpeg, png, jpg, gif の形式でなければなりません。',
            'photo_max'              => '画像サイズは2MBを超えてはいけません。',
        ],
    ]

];
