<?php

namespace System;

class Session
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

     /**
     * Constructor
     *
     * @param \System\Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

     /**
     * Start Session
     *
     * @return void
     */
    public function start()
    {
        ini_set('session.use_only_cookies', 1);

        if (! session_id()) {
            session_start();
        }
    }

     /**
     * Đặt giá trị mới  Session
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

     /**
     * Nhận giá trị từ Session bằng khóa đã cho
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get($key , $default = null)
    {
        return array_get($_SESSION, $key, $default);
    }

     /**
     * Xác định xem Session có khóa đã cho hay không
     *
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return isset($_SESSION[$key]);
    }

     /**
     * Xóa khóa đã cho khỏi session
     *
     * @param string $key
     * @return void
     */
    public function remove($key)
    {
        unset($_SESSION[$key]);
    }

     /**
     * Nhận giá trị từ session bằng khóa đã cho rồi xóa nó
     *
     * @param string $key
     * @return mixed
     */
    public function pull($key)
    {
        $value = $this->get($key);

        $this->remove($key);

        return $value;
    }

     /**
     * Nhận tất cả dữ liệu session
     *
     * @return array
     */
    public function all()
    {
        return $_SESSION;
    }

     /**
     * Hủy session
     *
     * @return void
     */
    public function destroy()
    {
        session_destroy();

        unset($_SESSION);
    }
}