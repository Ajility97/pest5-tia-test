<?php

test('waits 10 seconds and asserts true is true', function () {
    sleep(10);
    expect(true)->toBeTrue();
});
