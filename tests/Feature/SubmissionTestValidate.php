<?php

$urlApi = 'http://127.0.0.1:8000/api/v1/submits';

test('POST /api/submissions fails with invalid data field', function () use ($urlApi) {
    $data = [
        'name' => '',
        'email' => '222l111',
        'message' => '111111111',
    ];

    $response = $this->postJson($urlApi, $data);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'email']);
});
