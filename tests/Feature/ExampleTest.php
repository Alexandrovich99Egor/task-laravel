<?php

test('POST /api/submissions fails with invalid data', function () {
    $data = [
        'name' => '', // Пустое имя (ошибка)
        'email' => 'invalid-email', // Неправильный email (ошибка)
        'message' => 'Hello',
    ];

    $response = $this->postJson('/api/submissions', $data);

    $response->assertStatus(422); // Laravel должен вернуть 422 (ошибка валидации)
    $response->assertJsonValidationErrors(['name', 'email']);
});
