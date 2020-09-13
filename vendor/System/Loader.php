<?php

namespace System;

class Loader
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

     /**
     * Controllers Container
     *
     * @var array
     */
    private $controllers = [];

     /**
     * Models Container
     *
     * @var array
     */
    private $models = [];

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
     *Gọi bộ điều khiển đã cho bằng phương thức đã cho
     * và chuyển các đối số đã cho vào phương thức controller
     *
     * @param string $controller
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function action($controller, $method, array $arguments = [])
    {
        $object = $this->controller($controller);

        return call_user_func_array([$object, $method], $arguments);
    }

     /**
     * Call the given controller
     *
     * @param string $controller
     * @return object
     */
    public function controller($controller)
    {
        $controller = $this->getControllerName($controller);

        if (! $this->hasController($controller)) {
            $this->addController($controller);
        }

        return $this->getController($controller);
    }

     /**
     * Xác định xem lớp đã cho | controller có tồn tại không
     * trong vùng chứa bộ điều khiển
     * @param string $controller
     * @return bool
     */
    private function hasController($controller)
    {
        return array_key_exists($controller, $this->controllers);
    }

     /**
     * Tạo đối tượng mới cho bộ điều khiển đã cho và lưu trữ nó
     * trong vùng chứa bộ điều khiển
     * @param string $controller
     * @return void
     */
    private function addController($controller)
    {
        $object = new $controller($this->app);

        // App\Controllers\HomeController
        $this->controllers[$controller] = $object;
    }

     /**
     * Lấy đối tượng điều khiển
     *
     * @param string $controller
     * @return object
     */
    private function getController($controller)
    {
        return $this->controllers[$controller];
    }

     /**
     * Nhận tên lớp đầy đủ cho bộ điều khiển đã cho
     *
     * @param string $controller
     * @return string
     */
    private function getControllerName($controller)
    {
        $controller .= 'Controller';

        $controller = 'App\\Controllers\\' . $controller;

        return str_replace('/', '\\', $controller);
    }

     /**
     * Call the given model
     *
     * @param string $model
     * @return object
     */
    public function model($model)
    {
        $model = $this->getModelName($model);

        if (! $this->hasModel($model)) {
            $this->addModel($model);
        }

        return $this->getModel($model);
    }

     /**
     * Determine if the given class|model exists
     * in the models container
     *
     * @param string $model
     * @return bool
     */
    private function hasModel($model)
    {
        return array_key_exists($model, $this->models);
    }

     /**
     * Create new object for the given model and store it
     * in models container
     *
     * @param string $model
     * @return void
     */
    private function addModel($model)
    {
        $object = new $model($this->app);

        // App\Models\HomeModel
        $this->models[$model] = $object;
    }

     /**
     * Get the model object
     *
     * @param string $model
     * @return object
     */
    private function getModel($model)
    {
        return $this->models[$model];
    }

     /**
     * Get the full class name for the given model
     *
     * @param string $model
     * @return string
     */
    private function getModelName($model)
    {
        $model .= 'Model';

        $model = 'App\\Models\\' . $model;

        return str_replace('/', '\\', $model);
    }
}