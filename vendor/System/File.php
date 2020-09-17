<?php

namespace System;

class File
{
     /**
     * Directory Separator
     *
     * @const string
     */
    const DS = DIRECTORY_SEPARATOR;

     /**
     * Root Path
     *
     * @var string
     */
    private $root;

     /**
     * Constructor
     *
     * @param string $root
     */
    public function __construct($root)
    {
        $this->root = $root;
    }

     /**
     * Xác định đường dẫn tệp đã cho tồn tại
     *
     * @param string $file
     * @return bool
     */
    public function exists($file)
    {
        return file_exists($this->to($file));
    }

     /**
     * Require tệp đã cho
     *
     * @param string $file
     * @return mixed
     */
    public function call($file)
    {
        return require $this->to($file);
    }

     /**
     * Tạo đường dẫn đầy đủ đến đường dẫn đã cho trong thư mục
     *
     * @param string $path
     * @return string
     */
    public function toVendor($path)
    {
        return $this->to('vendor/' . $path);
    }

     /**
     *tạo đường dẫn đầy đủ đến đường dẫn đã cho trong thư mục chung
     *
     * @param string $path
     * @return string
     */
    public function toPublic($path)
    {
        return $this->to('public/' . $path);
    }

   /**
   * Tạo đường dẫn đầy đủ đến đường dẫn đã cho
   *
   * @param string $path
   * @return string
   */
  public function to($path)
  {
      return $this->root . static::DS . str_replace(['/', '\\'], static::DS, $path);
  }
}