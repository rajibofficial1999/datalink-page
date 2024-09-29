<?php

namespace App\Core;

class Request
{
    protected $get;
    protected $post;
    protected $files;
    protected $server;

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->files = $_FILES;
        $this->server = $_SERVER;
    }

    /**
     * Retrieve all input data (GET, POST, FILES)
     */
    public function all()
    {
        return array_merge($this->get, $this->post, $this->files);
    }

    /**
     * Retrieve specific input data by key from GET, POST, FILES
     */
    public function input($key = null, $default = null)
    {
        $allInputs = $this->all();
        if ($key === null) {
            return $allInputs;
        }
        return $allInputs[$key] ?? $default;
    }

    /**
     * Retrieve only POST data
     */
    public function post($key = null, $default = null)
    {
        if ($key === null) {
            return $this->post;
        }
        return $this->post[$key] ?? $default;
    }

    /**
     * Retrieve only GET data
     */
    public function get($key = null, $default = null)
    {
        if ($key === null) {
            return $this->get;
        }
        return $this->get[$key] ?? $default;
    }

    /**
     * Retrieve a file input
     */
    public function file($key)
    {
        return $this->files[$key] ?? null;
    }

    /**
     * Check if the request method is POST
     */
    public function isPost(): bool
    {
        return $this->server['REQUEST_METHOD'] === 'POST';
    }

    /**
     * Check if the request method is GET
     */
    public function isGet(): bool
    {
        return $this->server['REQUEST_METHOD'] === 'GET';
    }

    /**
     * Retrieve the current request URI
     */
    public function uri(): string
    {
        return $this->server['REQUEST_URI'];
    }

    /**
     * Retrieve the request method (GET, POST, etc.)
     */
    public function method(): string
    {
        return $this->server['REQUEST_METHOD'];
    }

    public function user_agent(): string
    {
        return $this->server['HTTP_USER_AGENT'];
    }

    public function ip(): string
    {
        return $this->server['REMOTE_ADDR'];
    }
}
