<?php

namespace System;

class Route
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

     /**
     * Routes Container
     *
     * @var array
     */
    private $routes = [];

     /**
     * Current Route
     *
     * @var array
     */
    private $current = [];

     /**
     * Not Found Url
     *
     * @var string
     */
    private $notFound;

     /**
     * gọi Container
     *
     * @var array
     */
    private $calls = [];

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
    * Get All routes
    *
    * @return array
    */
    public function routes()
    {
        return $this->routes;
    }

     /**
     * Add New Route
     *
     * @param string $url
     * @param string $action
     * @param string $requestMethod
     * @return void
     */
    public function add($url, $action, $requestMethod = 'GET')
    {
        $route = [
            'url'       => $url,
            'pattern'   => $this->generatePattern($url),
            'action'    => $this->getAction($action),
            'method'    => strtoupper($requestMethod),
        ];

        $this->routes[] = $route;
    }

     /**
     * Set Not Found Url
     *
     * @param string $url
     * @return void
     */
    public function notFound($url)
    {
        $this->notFound = $url;
    }

     /**
     * 
     *
     * @var callable $callable
     * @return $this
     */
    public function callFirst(callable $callable)
    {
        $this->calls['first'][] = $callable;

        return $this;
    }

     /**
     * Xác định xem có bất kỳ lệnh gọi lại nào sẽ được gọi trước đó không
     * gọi controller
     * @return bool
     */
    public function hasCallsFirst()
    {
        return ! empty($this->calls['first']);
    }

     /**
     * Gọi Tất cả các cuộc gọi lại sẽ được gọi trước đó
     * gọi controller
     *
     * @return bool
     */
    public function callFirstCalls()
    {
        foreach ($this->calls['first'] AS $callback) {
            call_user_func($callback, $this->app);
        }
    }

    /**
    * nhận routes thích hợp
    *
    * @return array
    */
   public function getProperRoute()
   {
       foreach ($this->routes as $route) {
           if ($this->isMatching($route['pattern']) AND $this->isMatchingRequestMethod($route['method'])) {
               $arguments = $this->getArgumentsFrom($route['pattern']);

               // controller@method
               list($controller, $method) = explode('@', $route['action']);

               $this->current = $route;

               return [$controller, $method, $arguments];
           }
       }

       return $this->app->url->redirectTo($this->notFound);
   }

    /**
    * Nhận Url Rou hiện tại
    *
    * @return string
    */
   public function getCurrentRouteUrl()
   {
       return $this->current['url'];
   }

    /**
    * Xác định xem mẫu đã cho có khớp với url yêu cầu hiện tại hay không
    *
    * @param string $pattern
    * @return bool
    */
   private function isMatching($pattern)
   {
       return preg_match($pattern, $this->app->request->url());
   }

   /**
   * Xác định xem phương thức yêu cầu hiện tại có bằng
   * phương pháp route đã cho
   *
   * @param string $routeMethod
   * @return bool
   */
   private function isMatchingRequestMethod($routeMethod)
   {
       return $routeMethod == $this->app->request->method();
   }

    /**
    * Nhận Argents từ url yêu cầu hiện tại
    * dựa trên mẫu đã cho
    *
    * @param string $pattern
    * @return array
    */
   private function getArgumentsFrom($pattern)
   {
       preg_match($pattern, $this->app->request->url(), $matches);

       array_shift($matches);

       return $matches;
   }

     /**
     * Tạo mẫu regex cho url đã cho
     *
     * @param string $url
     * @return string
     */
    private function generatePattern($url)
    {
        $pattern = '#^';

        // :text ([a-zA-Z0-9-]+)
        // :id (\d+)
        // tôi tên là hoàn
        // tôi
        // bạn
        // str_replace('tôi', 'bạn ', 'tôi tên là hoàn');

        // [a,b]
        // [c,d]
        // a b e
        // c d e
        // ([a-zA-Z0-9-]+)

        $pattern .= str_replace([':text', ':id'], ['([a-zA-Z0-9-]+)', '(\d+)'] , $url);

        $pattern .= '$#';

        return $pattern;
    }

     /**
     * Nhận Action thích hợp
     *
     * @param string $action
     * @return string
     */
    private function getAction($action)
    {
        $action = str_replace('/' , '\\', $action);

        return strpos($action, '@') !== false ? $action : $action . '@index';
    }
}