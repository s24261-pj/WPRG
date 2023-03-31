<?php

enum Operation: string
{
    case CREATE = "create";
    case DELETE = "delete";
    case READ = "read";
}

class FileManager
{
    public static function handle_directory($path, $name, $operation = Operation::READ->value): string
    {
        if (!str_ends_with($path, '/'))
            $path .= '/';

        if (!Operation::CREATE->value && !file_exists($path . $name))
            return "Directory does not exist";

        switch ($operation) {
            case Operation::CREATE->value:
                if (file_exists($path . $name))
                    return "Directory already exists";

                mkdir($path . $name);

                return "Directory created";
            case Operation::DELETE->value:
                if (!self::is_directory_empty($path . $name))
                    return "Directory cannot be deleted - it is not empty";

                rmdir($path . $name);

                return "Directory deleted";
            case Operation::READ->value:
            default:
                $directory = scandir($path . $name);
                $directory = array_diff($directory, array('.', '..'));

                return implode(', ', $directory);
        }
    }

    public static function is_directory_empty($directory): bool
    {
        if (!is_readable($directory)) return false;

        return (count(scandir($directory)) == 2);
    }
}

$path = $_GET['path'];
$directory = $_GET['directory'];
$operation = $_GET['operation'];

echo FileManager::handle_directory($path, $directory, $operation);