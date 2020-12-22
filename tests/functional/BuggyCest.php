<?php

namespace App\Tests;


class BuggyCest {
    public function testThatSomethingWorks(FunctionalTester $I) {
        $I->amOnPage("/test");
        $I->canSee("xxxxxxx");
        $I->canSee("a");
    }

}