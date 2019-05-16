<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f2243849f269632dcbcbf88c5dafaa4
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\Notification\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\Notification\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Firebase\\Notification\\BaseModel' => __DIR__ . '/../..' . '/src/BaseModel.php',
        'Firebase\\Notification\\CreateNotificationProperties' => __DIR__ . '/../..' . '/src/CreateNotificationProperties.php',
        'Firebase\\Notification\\Curl' => __DIR__ . '/../..' . '/src/Curl.php',
        'Firebase\\Notification\\FBConfig' => __DIR__ . '/../..' . '/src/FBConfig.php',
        'Firebase\\Notification\\FirebaseInitialize' => __DIR__ . '/../..' . '/src/FirebaseInitialize.php',
        'Firebase\\Notification\\HttpClient' => __DIR__ . '/../..' . '/src/HttpClient.php',
        'Firebase\\Notification\\JsonBuilder' => __DIR__ . '/../..' . '/src/JsonBuilder.php',
        'Firebase\\Notification\\JsonConvertible' => __DIR__ . '/../..' . '/src/JsonConvertible.php',
        'Firebase\\Notification\\NotificationMapper' => __DIR__ . '/../..' . '/src/NotificationMapper.php',
        'Firebase\\Notification\\NotificationResource' => __DIR__ . '/../..' . '/src/NotificationResource.php',
        'Firebase\\Notification\\NotificationResourceMapper' => __DIR__ . '/../..' . '/src/NotificationResourceMapper.php',
        'Firebase\\Notification\\Options' => __DIR__ . '/../..' . '/src/Options.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f2243849f269632dcbcbf88c5dafaa4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f2243849f269632dcbcbf88c5dafaa4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f2243849f269632dcbcbf88c5dafaa4::$classMap;

        }, null, ClassLoader::class);
    }
}