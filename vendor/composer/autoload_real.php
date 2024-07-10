<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit05f556664d53353b47f6d4e6f338f46c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit05f556664d53353b47f6d4e6f338f46c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit05f556664d53353b47f6d4e6f338f46c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit05f556664d53353b47f6d4e6f338f46c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
