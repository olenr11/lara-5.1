<?php
//https://github.com/SmartCrowd/laravel-rbac/blob/master/readme_rus.md
//http://www.yiiframework.com/doc-2.0/guide-security-authorization.html#access-check

Rbac::permission('users.crud');
//Rbac::permission('users.view');
//Rbac::permission('users.update.self');
/*
Rbac::permission('users.viewInterview.self',    function($params) {
    return $this->user->id == $params['user']->id;
});

Rbac::permission('users.updateInterview.self',  function($params) {
    return $this->user->id == $params['user']->id;
});
*/
Rbac::role('user', [
//    'users.view',
    //'users.viewInterview.self',
    //'users.updateInterview.self',
]);


Rbac::role(
    'admin', [
    'user',
    'users.crud'
]);


/*
Rbac::permission('users.show');

Rbac::role(
    'admin', [
    'user',
    'users.update'
]);
/*
 * Describe you permissions here.
 *
 *     Rbac::permission('users.show');
 *     Rbac::permission('users.index');
 *     Rbac::permission('users.update');
 *
 *     Rbac::permission('users.view', [
 *         'users.show',
 *         'users.index'
 *     ]);
 *
 *     Rbac::permission('users.update.self', ['users.update'], function($params)
 *     {
 *         return $this->user->id == $params['user']->id;
 *     });
 *
 *
 *     Rbac::role('user', [
 *         'users.view',
 *         'users.update.self'
 *     ]);
 *
 *     Rbac::role('admin', [
 *         'user',
 *         'users.update'
 *     ]);
 *
 *
 *     Rbac::resource('photo', 'PhotoController', 'owner_id');
 *
 * Is equivalent for:
 *
 *     Rbac::permission('photo.index');
 *     Rbac::permission('photo.create');
 *     Rbac::permission('photo.store');
 *     Rbac::permission('photo.show');
 *     Rbac::permission('photo.edit');
 *     Rbac::permission('photo.update');
 *     Rbac::permission('photo.destroy');
 *
 *     Rbac::permission('photo.public', [
 *         'photo.index',
 *         'photo.show'
 *     ]);
 *
 *     Rbac::permission('photo.manage', [
 *         'photo.update',
 *         'photo.edit',
 *         'photo.destroy'
 *     ]);
 *
 *     Rbac::permission('photo.manage.own', ['photo.manage'], function ($params)
 *     {
 *         return $params['photo']->owner_id == $this->user->id;
 *     });
 *
 *     Rbac::action('PhotoController@index',   'photo.index');
 *     Rbac::action('PhotoController@create',  'photo.create');
 *     Rbac::action('PhotoController@store',   'photo.store');
 *     Rbac::action('PhotoController@show',    'photo.show');
 *     Rbac::action('PhotoController@edit',    'photo.edit');
 *     Rbac::action('PhotoController@update',  'photo.update');
 *     Rbac::action('PhotoController@destroy', 'photo.destroy');
 */
