<?php

$urlApi = 'http://127.0.0.1:8000/api/v1/submits';

test('POST /api/submissions fails with invalid data field', function () use ($urlApi) {
    $data = [
        'name' => 'Egor',
        'email' => 'alex@mail.ua',
        'message' => '111111111TESTING',
    ];

    $response = $this->postJson($urlApi, $data);

    $response->assertStatus(201);
    $response->assertJsonValidationErrors(['name', 'email', 'message']);
});
