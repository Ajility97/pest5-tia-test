<?php

test('waits 8 seconds and asserts true is true', function () {
    sleep(8);
    expect(true)->toBeTrue();
});
