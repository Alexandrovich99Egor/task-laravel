<?php

//Тут я поменял вместо хард кода апи,взял роут,тест на валидейнш

test('POST /api/submissions fails with invalid data field', function ()  {

    $urlApi = route('submits.store');

    $data = [
        'name' => '',
        'email' => '222l111',
        'message' => '111111111',
    ];

    $response = $this->postJson($urlApi, $data);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'email']);
});
