<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute フィールドは承認する必要があります。',
    'accepted_if' => 'other が :value の場合、:attribute フィールドは承認する必要があります。.',
    'active_url' => ':attribute フィールドは有効なURLである必要があります。',
    'after' => ':attribute フィールドは :date より後の日付である必要があります。',
    'after_or_equal' => ':attribute フィールドは :date 以降の日付である必要があります。',
    'alpha' => ':attribute フィールドは英字のみを含む必要があります。',
    'alpha_dash' => ':attribute フィールドは英字、数字、ダッシュ（-）、下線 (_) のみを含む必要があります。',
    'alpha_num' => ':attribute フィールドは英字と数字のみを含む必要があります。',
    'any_of' => ':attribute フィールドは無効です。',
    'array' => ':attribute フィールドは配列である必要があります。',
    'ascii' => ':attribute フィールドは半角英数字および記号のみを含む必要があります。',
    'before' => ':attribute フィールドは :date より前の日付である必要があります。',
    'before_or_equal' => ':attribute フィールドは :date 以前の日付である必要があります。',
    'between' => [
        'array' => ':attributeフィールドは:min〜:max個の項目を含む必要があります。',
        'file' =>  ':attributeフィールドは:min〜:maxキロバイトのサイズである必要があります。',
        'numeric' => ':attributeフィールドは:min〜:maxキロバイトのサイズである必要があります。',
        'string' => ':attributeフィールドは:min〜:max文字の長さである必要があります。'
    ],
    'boolean' => ':attributeフィールドはtrueかfalseである必要があります。',
    'can' => ':attributeフィールドに許可されていない値が含まれています。',
    'confirmed' => ':attributeフィールドの確認が一致しません。',
    'contains' => ':attributeフィールドに必要な値が不足しています。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeフィールドは有効な日付である必要があります。',
    'date_equals' => ':attributeフィールドは:dateと同じ日付である必要があります。',
    'date_format' => ':attributeフィールドは:format形式と一致する必要があります。',
    'decimal' => ':attributeフィールドは:decimal桁の小数である必要があります。',
    'declined' => ':attributeフィールドは却下される必要があります。',
    'declined_if' => ':otherが:valueのとき、:attributeフィールドは却下される必要があります。',
    'different' => ':attributeフィールドと:otherは異なる必要があります。',
    'digits' => ':attributeフィールドは:digits桁の数字である必要があります。',
    'digits_between' => ':attributeフィールドは:min〜:max桁の数字である必要があります。',
    'dimensions' => ':attributeフィールドの画像サイズが無効です。',
    'distinct' => ':attributeフィールドに重複した値があります。',
    'doesnt_end_with' => ':attributeフィールドは次のいずれかで終わってはいけません: :values。',
    'doesnt_start_with' => ':attributeフィールドは次のいずれかで始まってはいけません: :values。',
    'email' => ':attributeフィールドは有効なメールアドレスである必要があります。',
    'ends_with' => ':attributeフィールドは次のいずれかで終わる必要があります: :values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'extensions' => ':attributeフィールドは次の拡張子のいずれかである必要があります: :values。',
    'file' => ':attributeフィールドはファイルである必要があります。',
    'filled' => ':attributeフィールドには値が必要です。',
    'gt' => [
        'array' => ':attributeフィールドは:value個より多い項目を含む必要があります。',
        'file' => ':attributeフィールドは:valueキロバイトより大きいサイズである必要があります。',
        'numeric' => ':attributeフィールドは:valueより大きい数値である必要があります。',
        'string' => ':attributeフィールドは:value文字より長い必要があります。'
    ],
    'gte' => [
        'array' => ':attributeフィールドには:value個以上の項目が必要です。',
        'file' => ':attributeフィールドは:valueキロバイト以上でなければなりません。',
        'numeric' => ':attributeフィールドは:value以上でなければなりません。',
        'string' => ':attributeフィールドは:value文字以上でなければなりません。',
    ],
        'hex_color' => ':attributeフィールドは有効な16進数の色でなければなりません。',
        'image' => ':attributeフィールドは画像でなければなりません。',
        'in' => '選択された:attributeは無効です。',
        'in_array' => ':attributeフィールドは:other内に存在しなければなりません。',
        'in_array_keys' => ':attributeフィールドには次のキーの少なくとも1つを含む必要があります: :values。',
        'integer' => ':attributeフィールドは整数でなければなりません。',
        'ip' => ':attributeフィールドは有効なIPアドレスでなければなりません。',
        'ipv4' => ':attributeフィールドは有効なIPv4アドレスでなければなりません。',
        'ipv6' => ':attributeフィールドは有効なIPv6アドレスでなければなりません。',
        'json' => ':attributeフィールドは有効なJSON文字列でなければなりません。',
        'list' => ':attributeフィールドはリストでなければなりません。',
        'lowercase' => ':attributeフィールドは小文字でなければなりません。',
    'lt' => [
        'array' => ':attributeフィールドは:value個未満の項目でなければなりません。',
        'file' => ':attributeフィールドは:valueキロバイト未満でなければなりません。',
        'numeric' => ':attributeフィールドは:value未満でなければなりません。',
        'string' => ':attributeフィールドは:value文字未満でなければなりません。',
    ],
    'lte' => [
        'array' => ':attributeフィールドは:value個を超えてはなりません。',
        'file' => ':attributeフィールドは:valueキロバイト以下でなければなりません。',
        'numeric' => ':attributeフィールドは:value以下でなければなりません。',
        'string' => ':attributeフィールドは:value文字以下でなければなりません。',
    ],
    'mac_address' =>  ':attributeフィールドは有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attributeフィールドは:max個を超えてはなりません。',
        'file' => ':attributeフィールドは:maxキロバイトを超えてはなりません。',
        'numeric' => ':attributeフィールドは:maxを超えてはなりません。',
        'string' => ':attributeフィールドは:max文字を超えてはなりません。'
    ],
        'max_digits' => ':attributeフィールドは:max桁を超えてはなりません。',
        'mimes' => ':attributeフィールドは:typeタイプのファイルでなければなりません: :values。',
        'mimetypes' => ':attributeフィールドは:typeタイプのファイルでなければなりません: :values。',
    'min' => [
        'array' => ':attributeフィールドは:min個以上の項目を含む必要があります。',
        'file' => ':attributeフィールドは:minキロバイト以上でなければなりません。',
        'numeric' => ':attributeフィールドは:min以上でなければなりません。',
        'string' => ':attributeフィールドは:min文字以上でなければなりません。',
    ],
    'min_digits' => ':attributeフィールドは:min桁以上でなければなりません。',
    'missing' => ':attributeフィールドは存在してはいけません。',
    'missing_if' => ':otherが:valueの場合、:attributeフィールドは存在してはいけません。',
    'missing_unless' => ':otherが:valueでない場合、:attributeフィールドは存在してはいけません。',
    'missing_with' => ':valuesが存在する場合、:attributeフィールドは存在してはいけません。',
    'missing_with_all' => ':valuesがすべて存在する場合、:attributeフィールドは存在してはいけません。',
    'multiple_of' => ':attributeフィールドは:valueの倍数でなければなりません。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeフィールドのフォーマットが無効です。',
    'numeric' => ':attributeフィールドは数字でなければなりません。',
    'password' => [
        'letters' => ':attributeフィールドには少なくとも1つのアルファベットを含む必要があります。',
        'mixed' => ':attributeフィールドには少なくとも1つの大文字と1つの小文字を含む必要があります。',
        'numbers' => ':attributeフィールドには少なくとも1つの数字を含む必要があります。',
        'symbols' => ':attributeフィールドには少なくとも1つの記号を含む必要があります。',
        'uncompromised' => '入力された:attributeはデータ漏洩に含まれています。別の:attributeを選んでください。',
    ],
    'present' => ':attributeフィールドは存在しなければなりません。',
    'present_if' => ':otherが:valueの場合、:attributeフィールドは存在しなければなりません。',
    'present_unless' => ':otherが:valueでない場合、:attributeフィールドは存在しなければなりません。',
    'present_with' => ':valuesが存在する場合、:attributeフィールドは存在しなければなりません。',
    'present_with_all' => ':valuesがすべて存在する場合、:attributeフィールドは存在しなければなりません。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_if_accepted' => ':otherが承認された場合、:attributeフィールドは禁止されています。',
    'prohibited_if_declined' => ':otherが拒否された場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesに含まれない限り、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherの存在を禁止します。',
    'regex' => ':attributeフィールドのフォーマットが無効です。',
    'required' => ':attributeフィールドは必須です。',
    'required_array_keys' => ':attributeフィールドには次の項目のエントリが必要です: :values。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_if_accepted' => ':otherが承認された場合、:attributeフィールドは必須です。',
    'required_if_declined' => ':otherが拒否された場合、:attributeフィールドは必須です。',
    'required_unless' => ':otherが:valuesに含まれない限り、:attributeフィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesがすべて存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesがいずれも存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeフィールドは:otherと一致する必要があります。',
    'size' => [
        'array' => ':attributeフィールドは:size個の項目を含む必要があります。',
        'file' => ':attributeフィールドは:sizeキロバイトでなければなりません。',
        'numeric' => ':attributeフィールドは:sizeでなければなりません。',
        'string' => ':attributeフィールドは:size文字でなければなりません。',
    ],
    'starts_with' => ':attributeフィールドは次のいずれかで始まる必要があります: :values。',
    'string' => ':attributeフィールドは文字列でなければなりません。',
    'timezone' => ':attributeフィールドは有効なタイムゾーンでなければなりません。',
    'unique' => ':attributeはすでに使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeフィールドは大文字でなければなりません。',
    'url' => ':attributeフィールドは有効なURLでなければなりません。',
    'ulid' => ':attributeフィールドは有効なULIDでなければなりません。',
    'uuid' => ':attributeフィールドは有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];