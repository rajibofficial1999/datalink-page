<?php

session_start();

use App\Http\Exceptions\ExceptionHandler;

const BASE_PATH = __DIR__ . '/../';

    function base_path($path): string
    {
        return BASE_PATH . $path;
    }

    function view($path, $attributes = [])
    {
        extract($attributes);

        require base_path("resources/views/{$path}.php");
    }

    function public_path($path = null): string
    {
        return base_path("public/{$path}");
    }

    function asset($path): string
    {
        return base_path("public/{$path}");
    }

    function url($path = '') : string
    {
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';

        $host = $_SERVER['HTTP_HOST'];

        $base = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        $base = rtrim($base, '/');
        $path = ltrim($path, '/');

        $url = $scheme . $host . $base . '/' . $path;

        return rtrim($url, '/');
    }

    function dd($value)
    {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
        die();
    }

    function dump($value)
    {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }

    function abort($statusCode, $message = ''): void
    {
        throw new ExceptionHandler($statusCode, $message);
    }

    function abort_if($condition, $statusCode, $message = ''): void
    {
        if($condition){
            throw new ExceptionHandler($statusCode, $message);
        };
    }

    function redirect(?string $to = null)
    {
        if($to){
            header("Location: $to");
            exit();
        }

        return new class {
            public function back()
            {
                if (isset($_SERVER['HTTP_REFERER'])) {
                    header("Location: {$_SERVER['HTTP_REFERER']}");
                } else {
                    header("Location: /");
                }

                return $this;
            }

            public function with(array $data): self
            {
                foreach ($data as $key => $value) {
                    $_SESSION['flash'][$key] = $value;
                }
                return $this;
            }
        };
    }



    function session(): object
    {
        return new class {
            public function has(string $key): bool
            {
                return isset($_SESSION[$key]) || isset($_SESSION['flash'][$key]);
            }

            public function get(string $key)
            {
                if (isset($_SESSION[$key])) {
                    return $_SESSION[$key];
                }

                if (isset($_SESSION['flash'][$key])) {
                    $value = $_SESSION['flash'][$key];
                    unset($_SESSION['flash'][$key]);
                    return $value;
                }

                return null;
            }

            public function forget(string $key)
            {
                if (isset($_SESSION[$key])) {
                    unset($_SESSION[$key]);
                }

                throw new ExceptionHandler(500, 'Undefined key');
            }

        };
    }
