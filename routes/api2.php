<?php

Route::get('system/device/enroll', function () {

    $json = ['data' =>
                ['response' => [
                    'status' => 'OK',
                    'message' => '',
                    'link' => ''
                ],
                'payload' => [
                    'handshake-token' => '328YEGUDYU3CGCG',
                    'company' => [
                        'name' => 'Isto é Expresso',
                        'id' => 1
                    ]
                ]
                ]
            ];

    return response()->json($json);
});

Route::get('courier/authentication/login', function () {

    $json = ['data' =>
                ['response' => [
                    'status' => 'OK',
                    'message' => '',
                    'link' => ''
                ],
                'payload' => [
                    'courier' => [
                        'name' => 'Joao Pedro',
                        'id' => 5
                    ]
                ]
                ]
            ];

    return response()->json($json);
});

Route::get('courier/deliveries/active', function () {

    $json = ['data' =>
                ['response' => [
                    'status' => 'OK',
                    'message' => '',
                    'link' => ''
                ],
                'payload' => [
                    'delivery' => [
                        'related' => [
                            'id' => 11
                        ],
                        'address' => [
                            'origin' => ['address' => 'Rua Morais Soares',
                                         'door_number' => '30 3o Esq',
                                         'postal_code' => '1170-257',
                                         'locality' => 'Lisboa',
                                         'city' => 'Lisboa',
                                         'country' => 'Portugal',
                                         'latitude' => 38.7316,
                                         'Longitude' => -9.12741],

                            'destination' => ['address' => 'Rua da Penha de Franca',
                                         'door_number' => '138',
                                         'postal_code' => '1170-028',
                                         'locality' => 'Lisboa',
                                         'city' => 'Lisboa',
                                         'country' => 'Portugal',
                                         'latitude' => 38.7264,
                                         'Longitude' => -9.13023]
                        ]
                    ]
                ]
                ]
            ];

    return response()->json($json);
});
