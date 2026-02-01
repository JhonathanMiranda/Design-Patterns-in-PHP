<?php

spl_autoload_register(function ($class) {
    $prefix = 'DesignPatterns\\';
    $base_dir = __DIR__ . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // Remove the prefix and convert to lowercase with underscores for directory names
    $relative_class = substr($class, $len);

    // Convert namespace to file path
    // Example: AbstractFactory\factories\ModernFurnitureFactory -> abstract_factory/factories/ModernFurnitureFactory.php
    $parts = explode('\\', $relative_class);

    // Convert first part (pattern name) to snake_case
    $parts[0] = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $parts[0]));

    $file = $base_dir . implode('/', $parts) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
