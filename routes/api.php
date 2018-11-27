<?php

Route::get('system/device/register', function () {

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
