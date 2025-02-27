<?php


//Тут получается саксес случай

test('POST /api/v1/submits succeeds with valid data', function () {

    $urlApi = route('submits.store');

    $data = [
        'name' => 'Egor',
        'email' => 'alex@mail.ua',
        'message' => 'message',
    ];

    $response = $this->postJson($urlApi, $data);

    $response->assertStatus(201)
        ->assertJson([
            'message' => 'Your submission has been received.',
            'data' => $data
        ]);
});
