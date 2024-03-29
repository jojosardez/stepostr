<?php

// Site Navigation Routes
$app->get('/', 'SiteNavigationController:getAllPages');
$app->get('/category/[{slug}]', 'SiteNavigationController:getPagesByCategorySlug');
$app->get('/search[{keywords}]', 'SiteNavigationController:getPagesByKeywords');
$app->get('/page/[{slug}]', 'SiteNavigationController:getPageBySlug');
$app->get('/about', 'SiteNavigationController:getAboutPage');

// Account Management Routes
$app->get('/admin', 'AccountController:getLogin');
$app->get('/admin/login', 'AccountController:getLogin');
$app->get('/admin/logout', 'AccountController:getLogout');
$app->get('/admin/account', 'AccountController:getAccount');
$app->post('/admin/login', 'AccountController:postLogin');
$app->post('/admin/account', 'AccountController:postAccount');

// Site Configuration Routes
$app->get('/admin/about', 'SiteConfigurationController:getAbout');
$app->get('/admin/theme', 'SiteConfigurationController:getThemeInfo');
$app->post('/admin/about', 'SiteConfigurationController:postAbout');
$app->post('/admin/theme', 'SiteConfigurationController:postTheme');

// Contributors Management Routes
$app->get('/admin/contributor', 'ContributorController:getAllContributors');
$app->get('/admin/contributor-add', 'ContributorController:getContributorForCreate');
$app->get('/admin/contributor-edit/[{id}]', 'ContributorController:getContributorById');
$app->get('/admin/contributor-delete/[{id}]', 'ContributorController:getContributorByIdForDelete');
$app->post('/admin/contributor-save', 'ContributorController:postContributor');

// Categories Management Routes
$app->get('/admin/category', 'CategoryController:getAllCategories');
$app->get('/admin/category-add', 'CategoryController:getCategoryForCreate');
$app->get('/admin/category-edit/[{id}]', 'CategoryController:getCategoryById');
$app->get('/admin/category-delete/[{id}]', 'CategoryController:getCategoryByIdForDelete');
$app->post('/admin/category-save', 'CategoryController:postCategory');

// Pages Management Routes
$app->get('/admin/page', 'PageController:getAllPages');
$app->get('/admin/page-add', 'PageController:getPageForCreate');
$app->get('/admin/page-edit/[{id}]', 'PageController:getPageById');
$app->get('/admin/page-delete/[{id}]', 'PageController:getPageByIdForDelete');
$app->post('/admin/page-save', 'PageController:postPage');

// Page Steps Management Routes
$app->get('/admin/pagestep-add[{args}]', 'PageStepController:getPageStepForCreate');
$app->get('/admin/pagestep-edit[{args}]', 'PageStepController:getPageStepById');
$app->get('/admin/pagestep-delete[{args}]', 'PageStepController:getPageStepByIdForDelete');
$app->post('/admin/pagestep-save', 'PageStepController:postPageStep');