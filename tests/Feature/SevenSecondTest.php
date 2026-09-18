<?php

test('waits 7 seconds and asserts true is true', function () {
    sleep(7);
    expect(true)->toBeTrue();
});
