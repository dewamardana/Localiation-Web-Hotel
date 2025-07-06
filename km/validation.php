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

    'accepted' => 'វាល :attribute ត្រូវតែត្រូវបានទទួលយក។',
    'accepted_if' => 'វាល :attribute ត្រូវតែត្រូវបានទទួលយកនៅពេលដែល :other មានតម្លៃ :value.',
    'active_url' => 'វាល :attribute ត្រូវតែជាទីតាំង URL ដែលមានសុពលភាព។',
    'after' => 'វាល :attribute ត្រូវតែជាថ្ងៃខែឆ្នាំបន្ទាប់ពី :date.',
    'after_or_equal' => 'វាល :attribute ត្រូវតែជាថ្ងៃខែឆ្នាំបន្ទាប់ ឬស្មើនឹង :date.',
    'alpha' => 'វាល :attribute ត្រូវតែមានតែអក្សរ។',
    'alpha_dash' => 'វាល :attribute ត្រូវតែមានតែអក្សរ លេខ ចុច និងគ្រាប់ចុចបន្ទាត់។',
    'alpha_num' => 'វាល :attribute ត្រូវតែមានតែអក្សរ និងលេខ។',
    'any_of' => 'វាល :attribute មិនមានសុពលភាព។',
    'array' => 'វាល :attribute ត្រូវតែជាអារេ។',
    'ascii' => 'វាល :attribute ត្រូវតែមានតែតួអក្សរលេខដែលមានប៊ីតតែមួយ និងសញ្ញាក្នុងតំបន់ ASCII ។',
    'before' => 'វាល :attribute ត្រូវតែជាថ្ងៃខែឆ្នាំមុនពី :date.',
    'before_or_equal' => 'វាល :attribute ត្រូវតែជាថ្ងៃខែឆ្នាំមុន ឬស្មើនឹង :date.',
    'between' => [
        'array' => 'វាល :attribute ត្រូវតែមានធាតុចនិង :min និង :max.',
        'file' => 'វាល :attribute ត្រូវតែមានទំហំចនិង :min និង :max kilobytes.',
        'numeric' => 'វាល :attribute ត្រូវតែមានតម្លៃចនិង :min និង :max.',
        'string' => 'វាល :attribute ត្រូវតែមានចំនួនតួអក្សរចនិង :min និង :max.',
    ],
    'boolean' => 'វាល :attribute ត្រូវតែជាពិត ឬមិនពិត។',
    'can' => 'វាល :attribute មានតម្លៃដែលមិនត្រឹមត្រូវ។',
    'confirmed' => 'ការបញ្ជាក់វាល :attribute មិនត្រូវគ្នា។',
    'contains' => 'វាល :attribute មិនមានតម្លៃដែលត្រូវការ។',
    'current_password' => 'ពាក្យសម្ងាត់មិនត្រឹមត្រូវ។',
    'date' => 'វាល :attribute ត្រូវតែជាថ្ងៃខែឆ្នាំដែលមានសុពលភាព។',
    'date_equals' => 'វាល :attribute ត្រូវតែជាថ្ងៃខែឆ្នាំស្មើនឹង :date.',
    'date_format' => 'វាល :attribute ត្រូវតែផ្ទៀងផ្ទាត់ទៅតាមទម្រង់ :format.',
    'decimal' => 'វាល :attribute ត្រូវតែមានចំនួនទសភាគ :decimal.',
    'declined' => 'វាល :attribute ត្រូវតែត្រូវបានបដិសេធ។',
    'declined_if' => 'វាល :attribute ត្រូវតែត្រូវបានបដិសេធនៅពេលដែល :other មានតម្លៃ :value.',
    'different' => 'វាល :attribute និង :other ត្រូវតែខុសគ្នា។',
    'digits' => 'វាល :attribute ត្រូវតែមាន :digits ខ្ទង់។',
    'digits_between' => 'វាល :attribute ត្រូវតែមានចំនួនខ្ទង់ចនិង :min និង :max.',
    'dimensions' => 'វាល :attribute មានវិមាត្ររូបភាពមិនត្រឹមត្រូវ។',
    'distinct' => 'វាល :attribute មានតម្លៃស្ទួន។',
    'doesnt_end_with' => 'វាល :attribute មិនត្រូវបញ្ចប់ជាមួយនឹងមួយក្នុងចំណោម: :values.',
    'doesnt_start_with' => 'វាល :attribute មិនត្រូវចាប់ផ្តើមជាមួយមួយក្នុងចំណោម: :values.',
    'email' => 'វាល :attribute ត្រូវតែជាទីតាំងអ៊ីមែលដែលមានសុពលភាព។',
    'ends_with' => 'វាល :attribute ត្រូវតែបញ្ចប់ជាមួយមួយក្នុងចំណោម: :values.',
    'enum' => 'វាល :attribute ដែលបានជ្រើសរើសមិនមានសុពលភាព។',
    'exists' => 'វាល :attribute ដែលបានជ្រើសរើសមិនមានសុពលភាព។',
    'extensions' => 'វាល :attribute ត្រូវតែមានផ្នែកបន្ថែមមួយក្នុងចំណោម: :values.',
    'file' => 'វាល :attribute ត្រូវតែជាឯកសារ។',
    'filled' => 'វាល :attribute ត្រូវតែមានតម្លៃ។',
    'gt' => [
        'array' => 'វាល :attribute ត្រូវតែមានធាតុច្រើនជាង :value.',
        'file' => 'វាល :attribute ត្រូវតែមានទំហំធំជាង :value kilobytes.',
        'numeric' => 'វាល :attribute ត្រូវតែមានតម្លៃធំជាង :value.',
        'string' => 'វាល :attribute ត្រូវតែមានចំនួនតួអក្សរធំជាង :value.',
    ],
    'gte' => [
        'array' => 'វាល :attribute ត្រូវតែមានធាតុច្រើនជាង ឬស្មើ :value.',
        'file' => 'វាល :attribute ត្រូវតែមានទំហំធំជាង ឬស្មើ :value kilobytes.',
        'numeric' => 'វាល :attribute ត្រូវតែមានតម្លៃធំជាង ឬស្មើ :value.',
        'string' => 'វាល :attribute ត្រូវតែមានចំនួនតួអក្សរធំជាង ឬស្មើ :value.',
    ],
    'hex_color' => 'វាល :attribute ត្រូវតែជាចម្លងពណ៌ hex ដែលមានសុពលភាព។',
    'image' => 'វាល :attribute ត្រូវតែជារូបភាព។',
    'in' => 'វាល :attribute ដែលបានជ្រើសរើសមិនមានសុពលភាព។',
    'in_array' => 'វាល :attribute ត្រូវតែមាននៅក្នុង :other.',
    'in_array_keys' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយក្នុងចំណោម: :values.',
    'integer' => 'វាល :attribute ត្រូវតែជាចំនួនគត់។',
    'ip' => 'វាល :attribute ត្រូវតែជាទីតាំង IP ដែលមានសុពលភាព។',
    'ipv4' => 'វាល :attribute ត្រូវតែជាទីតាំង IPv4 ដែលមានសុពលភាព។',
    'ipv6' => 'វាល :attribute ត្រូវតែជាទីតាំង IPv6 ដែលមានសុពលភាព។',
    'json' => 'វាល :attribute ត្រូវតែជាស្គ្រីប JSON ដែលមានសុពលភាព។',
    'list' => 'វាល :attribute ត្រូវតែជាបញ្ជី។',
    'lowercase' => 'វាល :attribute ត្រូវតែជាអក្សរតូច។',
    'lt' => [
        'array' => 'វាល :attribute ត្រូវតែមានធាតុតិចជាង :value.',
        'file' => 'វាល :attribute ត្រូវតែមានទំហំតិចជាង :value kilobytes.',
        'numeric' => 'វាល :attribute ត្រូវតែមានតម្លៃតិចជាង :value.',
        'string' => 'វាល :attribute ត្រូវតែមានចំនួនតួអក្សរតិចជាង :value.',
    ],
    'lte' => [
        'array' => 'វាល :attribute មិនត្រូវមានធាតុច្រើនជាង :value.',
        'file' => 'វាល :attribute ត្រូវតែមានទំហំតិចជាង ឬស្មើ :value kilobytes.',
        'numeric' => 'វាល :attribute ត្រូវតែមានតម្លៃតិចជាង ឬស្មើ :value.',
        'string' => 'វាល :attribute ត្រូវតែមានចំនួនតួអក្សរតិចជាង ឬស្មើ :value.',
    ],
    'mac_address' => 'វាល :attribute ត្រូវតែជាទីតាំង MAC ដែលមានសុពលភាព។',
    'max' => [
        'array' => 'វាល :attribute មិនត្រូវមានធាតុច្រើនជាង :max.',
        'file' => 'វាល :attribute មិនត្រូវមានទំហំធំជាង :max kilobytes.',
        'numeric' => 'វាល :attribute មិនត្រូវមានតម្លៃធំជាង :max.',
        'string' => 'វាល :attribute មិនត្រូវមានចំនួនតួអក្សរច្រើនជាង :max.',
    ],
   'max_digits' => 'វាល :attribute មិនត្រូវមានចំនួនខ្ទង់ច្រើនជាង :max.',
    'mimes' => 'វាល :attribute ត្រូវតែជាឯកសារប្រភេទ: :values.',
    'mimetypes' => 'វាល :attribute ត្រូវតែជាឯកសារប្រភេទ: :values.',
    'min' => [
       'array' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min ធាតុ។',
        'file' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min kilobytes.',
        'numeric' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min.',
        'string' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min តួអក្សរ។',
    ],
    'min_digits' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min ខ្ទង់។',
    'missing' => 'វាល :attribute ត្រូវតែបាត់បង់។',
    'missing_if' => 'វាល :attribute ត្រូវតែបាត់បង់នៅពេលដែល :other មានតម្លៃ :value.',
    'missing_unless' => 'វាល :attribute ត្រូវតែបាត់បង់លុះត្រាតែ :other មានតម្លៃ :value.',
    'missing_with' => 'វាល :attribute ត្រូវតែបាត់បង់នៅពេលដែល :values មាន។',
    'missing_with_all' => 'វាល :attribute ត្រូវតែបាត់បង់នៅពេលដែល :values ទាំងអស់មាន។',
    'multiple_of' => 'វាល :attribute ត្រូវតែជាពហុគុណនៃ :value.',
    'not_in' => 'វាល :attribute ដែលបានជ្រើសរើសមិនមានសុពលភាព។',
    'not_regex' => 'ទម្រង់វាល :attribute មិនមានសុពលភាព។',
    'numeric' => 'វាល :attribute ត្រូវតែជាចំនួន។',
    'password' => [
       'letters' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយអក្សរ។',
        'mixed' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយអក្សរធំ និងមួយអក្សរតូច។',
        'numbers' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយលេខ។',
        'symbols' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយសញ្ញា។',
        'uncompromised' => 'ពាក្យសម្ងាត់ :attribute បានលេចឡើងនៅក្នុងការបំពានទិន្នន័យ។ សូមជ្រើសរើស :attribute ផ្សេងទៀត។',
    ],
    'present' => 'វាល :attribute ត្រូវតែមាន។',
    'present_if' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :other មានតម្លៃ :value.',
    'present_unless' => 'វាល :attribute ត្រូវតែមានលុះត្រាតែ :other មានតម្លៃ :value.',
    'present_with' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :values មាន។',
    'present_with_all' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :values ទាំងអស់មាន។',
    'prohibited' => 'វាល :attribute ត្រូវបានហាមឃាត់។',
    'prohibited_if' => 'វាល :attribute ត្រូវបានហាមឃាត់នៅពេលដែល :other មានតម្លៃ :value.',
    'prohibited_if_accepted' => 'វាល :attribute ត្រូវបានហាមឃាត់នៅពេលដែល :other ត្រូវបានទទួលយក។',
    'prohibited_if_declined' => 'វាល :attribute ត្រូវបានហាមឃាត់នៅពេលដែល :other ត្រូវបានបដិសេធ។',
    'prohibited_unless' => 'វាល :attribute ត្រូវបានហាមឃាត់លុះត្រាតែ :other មានតម្លៃ :values.',
    'prohibits' => 'វាល :attribute ហាមឃាត់ :other មិនអោយមាន។',
    'regex' => 'ទម្រង់វាល :attribute មិនមានសុពលភាព។',
    'required' => 'វាល :attribute ត្រូវតែមាន។',
    'required_array_keys' => 'វាល :attribute ត្រូវតែមានធាតុសម្រាប់: :values.',
    'required_if' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :other មានតម្លៃ :value.',
    'required_if_accepted' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :other ត្រូវបានទទួលយក។',
    'required_if_declined' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :other ត្រូវបានបដិសេធ។',
    'required_unless' => 'វាល :attribute ត្រូវតែមានលុះត្រាតែ :other មានតម្លៃ :values.',
    'required_with' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :values មាន។',
    'required_with_all' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :values ទាំងអស់មាន។',
    'required_without' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :values មិនមាន។',
    'required_without_all' => 'វាល :attribute ត្រូវតែមាននៅពេលដែល :values ទាំងអស់មិនមាន។',
    'same' => 'វាល :attribute ត្រូវតែដូចគ្នាជាមួយ :other.',
    'size' => [
        'array' => 'វាល :attribute ត្រូវតែមានធាតុចំនួន :size.',
        'file' => 'វាល :attribute ត្រូវតែមានទំហំ :size kilobytes.',
        'numeric' => 'វាល :attribute ត្រូវតែមានតម្លៃ :size.',
        'string' => 'វាល :attribute ត្រូវតែមានចំនួនតួអក្សរ :size.',
    ],
    'starts_with' => 'វាល :attribute ត្រូវតែចាប់ផ្តើមជាមួយមួយក្នុងចំណោម: :values.',
    'string' => 'វាល :attribute ត្រូវតែជាស្គ្រីប។',
    'timezone' => 'វាល :attribute ត្រូវតែជាសម័យវេលាដែលមានសុពលភាព។',
    'unique' => 'វាល :attribute ត្រូវបានយកទៅប្រើរួចហើយ។',
    'uploaded' => 'វាល :attribute មិនអាចផ្ទុកឡើងបាន។',
    'uppercase' => 'វាល :attribute ត្រូវតែជាអក្សរធំ។',
    'url' => 'វាល :attribute ត្រូវតែជាទីតាំង URL ដែលមានសុពលភាព។',
    'ulid' => 'វាល :attribute ត្រូវតែជាទម្រង់ ULID ដែលមានសុពលភាព។',
    'uuid' => 'វាល :attribute ត្រូវតែជាទម្រង់ UUID ដែលមានសុពលភាព។',

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
            'rule-name' => 'សារដែលបានកំណត់เอง',
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
