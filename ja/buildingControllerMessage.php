<?php

return [
    // Title & Page Headings
    'title_index'   => '建物ページ | ダッシュボード',
    'title_create'  => '建物を追加 | ダッシュボード',
    'title_show'    => '建物詳細 | ダッシュボード',
    'title_edit'    => '建物を編集 | ダッシュボード',

    // Success Messages
    'success_add'   => '建物が正常に追加されました！',
    'success_update'=> '建物が正常に更新されました！',
    'success_delete'=> '建物データが正常に削除されました！',

    // Validation Error Messages
    'validation' => [
        'building_name_required' => '建物名は必須です。',
        'slug_required'          => 'スラグは必須です。',
        'slug_unique'            => 'このスラグはすでに使用されています。',
        'description_required'   => '説明文は必須です。',
        'photo_image'            => 'アップロードされたファイルは画像である必要があります。',
        'photo_mimes'            => '画像の形式は jpeg、png、jpg、gif のいずれかでなければなりません。',
        'photo_max'              => '画像サイズは2MB以下にしてください。',
    ],
];
