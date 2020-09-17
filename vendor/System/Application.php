<?php

namespace System;

use Closure;

class Application
{
     /**
     * Container
     *
     * @var array
     */
    private $container = [];

     /**
     * Application Object
     *
     * @var \System\Application
     */
    private static $instance;

     /**
     * Constructor
     *
     * @param \System\File $file
     */
    private function __construct(File $file)
    {
        $this->share('file', $file);

        $this->registerClasses();

        $this->loadHelpers();
    }

     /**
     * Get phiên bản  Application 
     *
     * @param \System\File $file
     * @return \System\Application
     */
    public static function getInstance($file = null)
    {
        if (is_null(static::$instance)) {
            static::$instance = new static($file);
        }

        return static::$instance;
    }

     /**
     * cahyj Application
     *
     * @return void
     */
    public function run()
    {
        $this->session->start();

        $this->request->prepareUrl();

        $this->file->call('App/index.php');

        list($controller, $method, $arguments) = $this->route->getProperRoute();

        if ($this->route->hasCallsFirst()) {
            $this->route->callFirstCalls();
        }

        $output = (string) $this->load->action($controller, $method, $arguments);

        $this->response->setOutput($output);

        $this->response->send();
    }

     /**
     * Đăng ký các lớp trong thanh ghi tải tự động spl
     *
     * @return void
     */
    private function registerClasses()
    {
        spl_autoload_register([$this, 'load']);
    }

     /**
     * Tải class thông qua tự động tải
     *
     * @param string $class
     * @return void
     */
    public function load($class)
    {
        if (strpos($class, 'App') === 0) {
            $file = $class . '.php';
        } else {
            // get vendor
            $file = 'vendor/' . $class . '.php';
        }

        if ($this->file->exists($file)) {
            $this->file->call($file);
        }                     
    }

     /**
     * Load Helpers
     *
     * @return void
     */
    private function loadHelpers()
    {
        $this->file->call('vendor/helpers.php');
    }

     /**
     * Get giá trị được chia sẻ
     *
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
        if (! $this->isSharing($key)) {
            if ($this->isCoreAlias($key)) {
                $this->share($key, $this->createNewCoreObject($key));
            } else {
                die('<b>' . $key . '</b> not found in application container');
            }
        }

        return $this->container[$key];
    }

     /**
     * Xác định xem khóa đã cho có được chia sẻ qua Application
     *
     * @param string $key
     * @return bool
     */
    public function isSharing($key)
    {
        return isset($this->container[$key]);
    }

    /**
    * Chia sẻ khóa đã cho | giá trị Thông qua Application
    *
    * @param string $key
    * @param mixed $value
    * @return mixed
    */
   public function share($key, $value)
   {
       if ($value instanceof Closure) {
           $value = call_user_func($value, $this);
       }

       $this->container[$key] = $value;
   }

     /**
     * Xác định xem key đã cho có phải là alias của lớp core hay không
     *
     * @param string $alias
     * @return bool
     */
    private function isCoreAlias($alias)
    {
        $coreClasses = $this->coreClasses();

        return isset($coreClasses[$alias]);
    }

     /**
     * Tạo đối tượng mới cho lớp core dựa trên alias
     *
     * @param string $alias
     * @return object
     */
    private function createNewCoreObject($alias)
    {
        $coreClasses = $this->coreClasses();

        $object = $coreClasses[$alias];

        return new $object($this);
    }

    /**
    * tất cả các lớp cốt core với aliases
    *
    * @return array
    */
   private function coreClasses()
   {
       return [
            'request'       => 'System\\Http\\Request',
            'response'      => 'System\\Http\\Response',
            'session'       => 'System\\Session',
            'route'         => 'System\\Route',
            'cookie'        => 'System\\Cookie',
            'load'          => 'System\\Loader',
            'html'          => 'System\\Html',
            'db'            => 'System\\Database',
            'view'          => 'System\\View\\ViewFactory',
            'url'           => 'System\\Url',
            'validator'     => 'System\\Validation',
            'pagination'    => 'System\\Pagination',
       ];
   }

    /**
    * Nhận giá trị chia sẻ động
    *
    * @param string $key
    * @return mixed
    */
   public function __get($key)
   {
       return $this->get($key);
   }
}