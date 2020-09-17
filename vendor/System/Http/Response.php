<?php

namespace System\Http;

use System\Application;

class Response
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

     /**
     * Headers container that will be sent to the browser
     *
     * @var array
     */
    private $headers = [];

     /**
     * The content that will be sent to the browser
     *
     * @var string
     */
    private $content = '';

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
     * Gửi phản hồi output content
     *
     * @param string $content
     * @return void
     */
    public function setOutput($content)
    {
        $this->content = $content;
    }

     /**
     * Gửi phản hồi Headers
     *
     * @param string $header
     * @param mixed value
     * @return void
     */
    public function setHeader($header, $value)
    {
        $this->headers[$header] = $value;
    }

     /**
     * Gửi phản hồi headers and content
     *
     * @return void
     */
    public function send()
    {
        $this->sendHeaders();

        $this->sendOutput();
    }

     /**
     * Gửi phản hồi headers
     *
     * @return void
     */
    private function sendHeaders()
    {    
        foreach ($this->headers as $header => $value) {
            header($header . ':' . $value);
        }
    }

     /**
     * Gửi phản hồi output
     *
     * @return void
     */
    private function sendOutput()
    {
        echo $this->content;
    }
}