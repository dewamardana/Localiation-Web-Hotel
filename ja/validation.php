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
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'The :attribute field must be at least :min.',
        'string' => 'The :attribute field must be at least :min characters.',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric' => 'The :attribute field must be a number.',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute field must contain at least one number.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_if_accepted' => 'The :attribute field is prohibited when :other is accepted.',
    'prohibited_if_declined' => 'The :attribute field is prohibited when :other is declined.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string' => 'The :attribute field must be a string.',
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute field must be a valid URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',

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
            'rule-name' => 'custom-message',
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
