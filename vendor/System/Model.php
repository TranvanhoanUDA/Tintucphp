<?php

namespace System;

abstract class Model
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    protected $app;

     /**
     * tên bảng
     *
     * @var string
     */
    protected $table;

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
     * Gọi động các đối tượng được chia sẻ
     *
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->app->get($key);
    }
     /**
     * Get all Model Records
     *
     * @return array
     */
    public function all()
    {
        return $this->orderBy('id', 'DESC')->fetchAll($this->table);
    }

     /**
     * Get Record By Id
     *
     * @param int $id
     * @return \stdClass | null
     */
    public function get($id)
    {
        return $this->where('id = ?' , $id)->fetch($this->table);
    }

     /**
     * Xác định xem giá trị đã cho của khóa có tồn tại trong bảng hay không
     *
     * @param mixed $value
     * @param string $key
     * @return bool
     */
    public function exists($value, $key = 'id')
    {
        return (bool) $this->select($key)->where($key .'=?' , $value)->fetch($this->table);
    }

     /**
     * Delete Record By Id
     *
     * @param int $id
     * @return void
     */
    public function delete($id)
    {
        return $this->where('id = ?' , $id)->delete($this->table);
    }

     /**
     *Gọi các phương thức Cơ sở dữ liệu động
     *
     * @param string $method
     * @param array $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->app->db, $method], $args);
    }
}