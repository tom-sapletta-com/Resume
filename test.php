<?php
/**
 * Project: Resume,
 * File created by: tom-sapletta-com, on 20.10.2016, 20:58
 */
require __DIR__ . '/vendor/autoload.php';

$data = [];
$data['lang'] = 'en';
//new \Resume\Cv($data);

#php test.php


$folder_project = 'src';
$folder_test = 'tests/unit';
$namespace_project = 'Resume';
$project_author = 'tom-sapletta-com';

$needle = ['interface', 'abstract'];
$files = new FilesGenerator($folder_project, $needle);
$scaninfo = new UnittestGenerator($files, $folder_test, $namespace_project, $project_author);

/*
$I = new FunctionalTester($scenario);
$I->wantTo('create wiki page');
$I->amOnPage('/');
$I->click('Pages');
$I->click('New');
$I->see('New Page');
$I->submitForm('form#new_page', ['title' => 'Tree of Life Movie Review','body' => "Next time don't let Hollywood create art-house!"]);
$I->see('page created'); // notice generated
$I->see('Tree of Life Movie Review','h1'); // head of page of is our title
$I->seeInCurrentUrl('pages/tree-of-life-movie-review'); // slug is generated
$I->seeInDatabase('pages', ['title' => 'Tree of Life Movie Review']); // data is stored in database

*/