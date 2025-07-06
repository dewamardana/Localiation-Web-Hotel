<?php

return [
    'title_home'       => 'ホーム | ホームページ',

    // Flash messages
    'success_store'    => 'データが正常に保存されました。',
    'warning_formula'  => 'この建物と会員数には対応するフォーミュラがありません。',

    // Validation (opsional, kalau mau dipakai di request message)
    'validation' => [
        'building_required'      => '建物を選択してください。',
        'oa_required'            => 'OAの値を入力してください。',
        'ov_required'            => 'OVの値を入力してください。',
        'stay_required'          => 'Stayの値を入力してください。',
        'vec_required'           => 'V/ecoの値を入力してください。',
        'total_room_required'    => '部屋数を入力してください。',
        'members_required'       => '少なくとも1人の会員を選択してください。',
        
        'building_exists'        => '選択された建物は存在しません。',
        'oa_integer'             => 'OAは数値で入力してください。',
        'oa_min'                 => 'OAは負の値にできません。',
        'ov_integer'             => 'OVは数値で入力してください。',
        'ov_min'                 => 'OVは負の値にできません。',
        'stay_integer'           => 'Stayは数値で入力してください。',
        'stay_min'               => 'Stayは負の値にできません。',
        'vec_integer'            => 'V/ecoは数値で入力してください。',
        'vec_min'                => 'V/ecoは負の値にできません。',
        'total_room_integer'     => '部屋数は数値で入力してください。',
        'total_room_min'         => '部屋数は負の値にできません。',
        'members_array'          => '会員情報は配列形式で指定してください。',
        'members_exists'         => '選択された会員は存在しません',
    ],
];