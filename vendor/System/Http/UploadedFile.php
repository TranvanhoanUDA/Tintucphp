<?php

namespace System\Http;

use System\Application;

class UploadedFile
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

     /**
     * Tệp đã tải lên
     *
     * @var array
     */
    private $file = [];

     /**
     * Tên Tệp đã tải lên
     *
     * @var string
     */
    private $fileName;

     /**
     * Tên tệp đã tải lên không có phần extension
     *
     * @var string
     */
    private $nameOnly;

     /**
     * Tệp đã tải lên extension
     *
     * @var string
     */
    private $extension;

     /**
     * loại mime tệp đã tải lên
     *
     * @var string
     */
    private $mimeType;

     /**
     * Đường dẫn tệp tạm thời đã tải lên
     *
     * @var string
     */
    private $tempFile;

     /**
     * Kích thước tệp đã tải lên tính bằng byte
     *
     * @var int
     */
    private $size;

     /**
     * uploaded file error
     *
     * @var int
     */
    private $error;

     /**
     * ghép Phần mở rộng hình ảnh 
     *
     * @var array
     */
    private $allowedImageExtensions = ['gif', 'jpg', 'jpeg', 'png', 'webp'];

     /**
     * Constructor
     *
     * @param string $input
     */
    public function __construct($input)
    {
        $this->getFileInfo($input);
    }

     /**
     * Bắt đầu thu thập dữ liệu tệp đã tải lên
     *
     * @param string $input
     * @return void
     */
    private function getFileInfo($input)
    {
        if (empty($_FILES[$input])) {
            return;
        }

        $file = $_FILES[$input];

        $this->error = $file['error'];

        if ($this->error != UPLOAD_ERR_OK) {
            return;
        }

        $this->file = $file;

        $this->fileName = $this->file['name'];

        $fileNameInfo = pathinfo($this->fileName);

        $this->nameOnly = $fileNameInfo['basename'];

        $this->extension = strtolower($fileNameInfo['extension']);

        $this->mimeType = $this->file['type'];

        $this->tempFile = $this->file['tmp_name'];

        $this->size = $this->file['size'];
    }

     /**
     * Xác định xem tệp có được tải lên không
     *
     * @return bool
     */
    public function exists()
    {
        return ! empty($this->file);
    }

     /**
     * Get tên File 
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

     /**
     * Chỉ nhận Tên tệp mà không có phần mở rộng     *
     * @return string
     */
    public function getNameOnly()
    {
        return $this->nameOnly;
    }

     /**
     * Get phần mở rộng tệp
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

     /**
     * Get File mime type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

     /**
     * Xác định xem tệp tải lên có phải là hình ảnh hay không
     *
     * @return bool
     */
    public function isImage()
    {
        return strpos($this->mimeType, 'image/') === 0 AND
               in_array($this->extension, $this->allowedImageExtensions);
    }

     /**
     * Di chuyển tệp đã tải lên đến "target" đích nhất định
     *
     * @param string $target
     * @param string $newFileName
     * @return string
     */
    public function moveTo($target, $newFileName = null)
    {
        $fileName = $newFileName ?: sha1(mt_rand()) . '_' . sha1(mt_rand()); // total length = 81 char

        $fileName .= '.' .$this->extension;

        if (! is_dir($target)) {
            mkdir($target, 0777, true);
        }

        $uploadedFilePath = rtrim($target , '/') . '/' . $fileName;

        move_uploaded_file($this->tempFile, $uploadedFilePath);

        return $fileName;
    }
}