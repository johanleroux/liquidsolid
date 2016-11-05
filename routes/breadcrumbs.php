<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
  $breadcrumbs->push('Home', url('/'));
});

// Home > Ads
Breadcrumbs::register('ad_index', function($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Dog Postings', action('AdsController@index'));
});

// Home > Ads > Create
Breadcrumbs::register('ad_create', function($breadcrumbs) {
  $breadcrumbs->parent('ad_index');
  $breadcrumbs->push('Post an Ad', action('AdsController@create'));
});

// Home > Ads > Show
Breadcrumbs::register('ad_show', function($breadcrumbs, $ad) {
  $breadcrumbs->parent('ad_index');
  $breadcrumbs->push($ad->title, action('AdsController@show', $ad->id));
});

// Home > Ads > Show > Edit
Breadcrumbs::register('ad_edit', function($breadcrumbs, $ad) {
  $breadcrumbs->parent('ad_show', $ad);
  $breadcrumbs->push('[Edit] ' . $ad->title, action('AdsController@edit', $ad));
});

// Home > Messages
Breadcrumbs::register('message_index', function($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Messages', action('MessagesController@index'));
});

// Home > Messages > Show
Breadcrumbs::register('message_show', function($breadcrumbs, $thread) {
  $breadcrumbs->parent('message_index');
  $breadcrumbs->push($thread->subject, action('MessagesController@show', $thread->id));
});

// Home > Account
Breadcrumbs::register('account_show', function($breadcrumbs, $user) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($user->name, action('UsersController@show', $user->id));
});


// Home > Account > Edit
Breadcrumbs::register('account_edit', function($breadcrumbs) {
  $breadcrumbs->parent('account_show', Auth::user());
  $breadcrumbs->push('Edit Account', action('UsersController@edit', Auth::user()->id));
});

// Home > Account > Edit
Breadcrumbs::register('account_change_password', function($breadcrumbs) {
  $breadcrumbs->parent('account_show', Auth::user());
  $breadcrumbs->push('Change Password', action('UsersController@editPassword'));
});
