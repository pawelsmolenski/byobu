<?php

/*
 * This file is part of fof/byobu.
 *
 * Copyright (c) 2019 FriendsOfFlarum.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Schema\Builder;

return [
    'up' => function (Builder $schema) use ($permissionKey) {
        /**
         * @var \Flarum\Settings\SettingsRepositoryInterface
         */
        $settings = app('flarum.settings');
        $settings->delete('fof-byobu.enable_byobu_user_page');
    },

    'down' => function (Builder $schema) use ($permissionKey) {
        // erm, no
    },
];
