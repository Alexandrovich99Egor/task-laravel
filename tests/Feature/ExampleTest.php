<?php

test('POST /api/submissions fails with invalid data', function () {
    $data = [
        'name' => '',
        'email' => 'invalid-email',
        'message' => 'Hello',
    ];

    $response = $this->postJson('/api/submissions', $data);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'email']);
});
