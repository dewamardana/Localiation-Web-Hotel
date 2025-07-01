<?php

return [
    'title_home'       => 'Home | Homepage',

    // Flash messages
    'success_store'    => 'Data has been successfully saved.',
    'warning_formula'  => 'Formula is not available for this building and number of members.',

    // Validation (opsional, kalau mau dipakai di request message)
    'validation' => [
        'building_required'      => 'Building must be selected.',
        'oa_required'            => 'OA value is required.',
        'ov_required'            => 'OV value is required.',
        'stay_required'          => 'Stay value is required.',
        'vec_required'           => 'Vec value is required.',
        'total_room_required'    => 'Total room is required.',
        'members_required'       => 'At least one member must be selected.',
        
        'building_exists'        => 'Selected building not found.',
        'oa_integer'             => 'OA must be a number.',
        'oa_min'                 => 'OA cannot be negative.',
        'ov_integer'             => 'OV must be a number.',
        'ov_min'                 => 'OV cannot be negative.',
        'stay_integer'           => 'Stay must be a number.',
        'stay_min'               => 'Stay cannot be negative.',
        'vec_integer'            => 'Vec must be a number.',
        'vec_min'                => 'Vec cannot be negative.',
        'total_room_integer'     => 'Total room must be a number.',
        'total_room_min'         => 'Total room cannot be negative.',
        'members_array'          => 'Members must be in array format.',
        'members_exists'         => 'Selected member not found.',
    ],
];
