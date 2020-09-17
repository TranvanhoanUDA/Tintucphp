<?php

namespace System;

class Validation
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

     /**
     * Errors container
     *
     * @var array
     */
    private $errors = [];

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
     * Determine if the given input is not empty
     *
     * @param string $inputName
     * @param string $customErrorMessage
     * @return $this
     */
    public function required($inputName, $customErrorMessage = null)
    {
        if ($this->hasErrors($inputName)) {
            return $this;
        }

        $inputValue = $this->value($inputName);

        if ($inputValue === '') {
            $message = $customErrorMessage ?: sprintf('%s Is Required', ucfirst($inputName));
            $this->addError($inputName, $message);
        }

        return $this;
    }

     /**
     * Xác định xem tệp đầu vào đã cho có tồn tại hay không
     *
     * @param string $inputName
     * @param string $customErrorMessage
     * @return $this
     */
    public function requiredFile($inputName, $customErrorMessage = null)
    {
        if ($this->hasErrors($inputName)) {
            return $this;
        }

        $file = $this->app->request->file($inputName);

        if (! $file->exists()) {
            $message = $customErrorMessage ?: sprintf('%s Is Required', ucfirst($inputName));
            $this->addError($inputName, $message);
        }

        return $this;
    }

     /**
     * Xác định xem đầu vào đã cho có phải là hình ảnh hay không
     *
     * @param string $inputName
     * @param string $customErrorMessage
     * @return $this
     */
    public function image($inputName, $customErrorMessage = null)
    {
        if ($this->hasErrors($inputName)) {
            return $this;
        }

        $file = $this->app->request->file($inputName);

        if (! $file->exists()) {
            return $this;
        }

        if (! $file->isImage()) {
            $message = $customErrorMessage ?: sprintf('%s Is not valid Image', ucfirst($inputName));
            $this->addError($inputName, $message);
        }

        return $this;
    }

     /**
     * Xác định xem đầu vào đã cho có phải là email hợp lệ không
     *
     * @param string $inputName
     * @param string $customErrorMessage
     * @return $this
     */
    public function email($inputName, $customErrorMessage = null)
    {
        if ($this->hasErrors($inputName)) {
            return $this;
        }

        $inputValue = $this->value($inputName);

        if (! filter_var($inputValue, FILTER_VALIDATE_EMAIL)) {
            $message = $customErrorMessage ?: sprintf('%s is not valid email', ucfirst($inputName));
            $this->addError($inputName, $message);
        }

        return $this;
    }

     /**
     * Xác định xem đầu vào đã cho có giá trị float hay không
     *
     * @param string $inputName
     * @param string $customErrorMessage
     * @return $this
     */
    public function float($inputName, $customErrorMessage = null)
    {
        if ($this->hasErrors($inputName)) {
            return $this;
        }

        $inputValue = $this->value($inputName);

        if (! is_float($inputValue)) {
            $message = $customErrorMessage ?: sprintf('%s Accepts only floats', ucfirst($inputName));
            $this->addError($inputName, $message);
        }

        return $this;
    }

     /**
     * Xác định xem giá trị đầu vào đã cho phải có độ dài ít nhất là bao nhiêu
     *
     * @param string $inputName
     * @param int $length
     * @param string $customErrorMessage
     * @return $this
     */
    public function minLen($inputName, $length, $customErrorMessage = null)
    {
        if ($this->hasErrors($inputName)) {
            return $this;
        }

        $inputValue = $this->value($inputName);

        if (strlen($inputValue) < $length) {
            $message = $customErrorMessage ?: sprintf('%s should be at least %d', ucfirst($inputName), $length);
            $this->addError($inputName, $message);
        }

        return $this;
    }

     /**
     * Xác định xem giá trị đầu vào đã cho phải có độ dài tối đa là bao nhiêu
     *
     * @param string $inputName
     * @param int $length
     * @param string $customErrorMessage
     * @return $this
     */
    public function maxLen($inputName, $customErrorMessage = null)
    {
        if ($this->hasErrors($inputName)) {
            return $this;
        }

        $inputValue = $this->value($inputValue);

        if (strlen($inputValue) > $length) {
            $message = $customErrorMessage ?: sprintf('%s should be at most %d', ucfirst($inputName), $length);
            $this->addError($inputName, $message);
        }

        return $this;

    }

     /**
     * Xác định xem đầu vào đầu tiên có khớp với đầu vào thứ hai hay không
     *
     * @param string $fistInput
     * @param string $secondInput
     * @param string $customErrorMessage
     * @return $this
     */
    public function match($firstInput, $secondInput, $customErrorMessage = null)
    {
        $firstInputValue = $this->value($firstInput);
        $secondInputValue = $this->value($secondInput);

        if ($firstInputValue != $secondInputValue) {
            $message = $customErrorMessage ?: sprintf('%s should match %s', ucfirst($secondInput), ucfirst($firstInput));
            $this->addError($secondInput, $message);
        }

        return $this;
    }

     /**
     * Xác định xem đầu vào đã cho là duy nhất trong cơ sở dữ liệu
     *
     * @param string $inputName
     * @param array $databaseData
     * @param string $customErrorMessage
     * @return $this
     */
    public function unique($inputName, array $databaseData, $customErrorMessage = null)
    {
        if ($this->hasErrors($inputName)) {
            return $this;
        }

        $inputValue = $this->value($inputName);

        $table = null;
        $column = null;
        $exceptionColumn = null;
        $exceptionColumnValue = null;

        if (count($databaseData) == 2) {
            list($table, $column) = $databaseData;
        } elseif (count($databaseData == 4)) {
            list($table, $column, $exceptionColumn, $exceptionColumnValue) = $databaseData;
        }

        if ($exceptionColumn AND $exceptionColumnValue) {
            $result = $this->app->db->select($column)
                                    ->from($table)
                                    ->where($column . ' = ? AND ' . $exceptionColumn . ' != ?' , $inputValue, $exceptionColumnValue)
                                    ->fetch();
        } else {
            $result = $this->app->db->select($column)
                                    ->from($table)
                                    ->where($column . ' = ?' , $inputValue)
                                    ->fetch();
        }

        if ($result) {
            $message = $customErrorMessage ?: sprintf('%s already exists', ucfirst($inputName));
            $this->addError($inputName, $message);
        }
    }

     /**
     * Thêm tin nhắn tùy chỉnh
     *
     * @param string $message
     * @return $this
     */
    public function message($message)
    {
        $this->errors[] = $message;

        return $this;
    }

     /**
     * Xác định xem có bất kỳ đầu vào không hợp lệ nào không
     *
     * @return bool
     */
    public function fails()
    {
        return ! empty($this->errors);
    }

     /**
     * Xác định xem tất cả các đầu vào có hợp lệ không
     *
     * @return bool
     */
    public function passes()
    {
        return empty($this->errors);
    }

     /**
     * Get All errors
     *
     * @return array
     */
    public function getMessages()
    {
        return $this->errors;
    }

     /**
     * Flatten errors and make it as a string imploded with break
     *
     * @return string
     */
    public function flattenMessages()
    {
        return implode('<br>', $this->errors);
    }

     /**
     * Nhận giá trị cho tên đầu vào đã cho
     *
     * @param string $input
     * @return mixed
     */
    private function value($input)
    {
        return $this->app->request->post($input);
    }

     /**
     * Thêm lỗi đầu vào
     *
     * @param string $inputName
     * @param string $errorMessage
     * @return void
     */
    private function addError($inputName, $errorMessage)
    {
        $this->errors[$inputName] = $errorMessage;
    }

     /**
     * Xác định xem đầu vào đã cho có lỗi trước đó không
     *
     * @param string $inputName
     */
    private function hasErrors($inputName)
    {
        return array_key_exists($inputName, $this->errors);
    }
}