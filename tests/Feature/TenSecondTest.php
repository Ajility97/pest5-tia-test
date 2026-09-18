<?php

test('waits 10 seconds and asserts true is true', function () {
    \App\Example::ok();
    sleep(10);
    expect(true)->toBeTrue();
    expect(\App\Example::ok())->toBeTrue();
});
