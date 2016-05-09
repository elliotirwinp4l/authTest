<?php

/**
 * Created by PhpStorm.
 * User: elliot
 * Date: 09/05/2016
 * Time: 08:36
 */
class Config {
    const conf = array(
        'db' => array(
            'host' =>'localhost',
            'user' => 'test_user',
            'pass' => 'test_pass',
            'name' => 'test_db'
        ),
        'pwRules' => array(
            'minLength' => 8,
            'maxLength' => 30,
            'reqNum' => true,
            'reqAlpha' => true,
            'reqSymbol' => true,
            'allowedSymbol' => '!@£$%^&*()_+-=[]{};:|~`±§<,>.?'
        ),
        'usernameRules' => array(
            'minLength' => 6,
            'maxLength' => 30,
            'allowedSymbol' => '!@£$%^&*()_+-=[]{};:|~`±§<,>.?'
        )
    );

    public static function db() {
        return self::conf['db'];
    }

    public static function pwRules() {
        return self::conf['pwRules'];
    }

    public static function usernameRules() {
        return self::conf['usernameRules'];
    }

};
