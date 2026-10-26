<?php

test('contact page renders with the enquiry form', function () {
    $this->get(route('contact'))
        ->assertOk()
        ->assertSee('Contact NCoE')
        ->assertSee('Send a message')
        ->assertSee('info@ncoe.org.in');
});
