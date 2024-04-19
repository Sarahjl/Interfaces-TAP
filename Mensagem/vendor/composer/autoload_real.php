<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit47c3ed6ef3a3567f0a3c15cc630e3733
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

        spl_autoload_register(array('ComposerAutoloaderInit47c3ed6ef3a3567f0a3c15cc630e3733', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit47c3ed6ef3a3567f0a3c15cc630e3733', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit47c3ed6ef3a3567f0a3c15cc630e3733::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
