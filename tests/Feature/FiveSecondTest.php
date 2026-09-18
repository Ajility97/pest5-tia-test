<?php

test('waits 5 seconds and asserts true is true', function () {
    sleep(5);
    expect(true)->toBeTrue();
});
