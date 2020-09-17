<?php

namespace System;

class Pagination
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

     /**
     * Total Items
     *
     * @var int
     */
    private $totalItems;

     /**
     * Các mục trên mỗi trang
     *
     * @var int
     */
    private $itemsPerPage = 10;

     /**
     * Số trang cuối cùng => Tổng số trang
     *
     * @var int
     */
    private $lastPage;

     /**
     * Số trang hiện tại
     *
     * @var int
     */
    private $page = 1;

     /**
     * Constructor
     *
     * @param \System\Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;

        $this->setCurrentPage();
    }

     /**
     * Đặt trang hiện tại
     *
     * @return void
     */
    private function setCurrentPage()
    {
        // ?page=1
        // ?page=2
        // ?page=3
        $page = $this->app->request->get('page');

        // trang tham số chuỗi truy vấn đã chuyển
        // phải là số và phải lớn hơn hoặc bằng 1
        if (! is_numeric($page) OR $page < 1) {
            $page = 1;
        }

        $this->page = $page;
    }

     /**
     * Get số trang hiện tại
     *
     * @return int
     */
    public function page()
    {
        return $this->page;
    }

     /**
     * Get các mục trên mỗi trang
     *
     * @return int
     */
    public function itemsPerPage()
    {
        return $this->itemsPerPage;
    }

     /**
     * Get Total Items
     *
     * @return int
     */
    public function totalItems()
    {
        return $this->totalItems;
    }

     /**
     * Get Trang cuối
     *
     * @return int
     */
    public function last()
    {
        return $this->lastPage;
    }

     /**
     * Get Next Page number
     *
     * @return int
     */
    public function next()
    {
        return $this->page + 1;
    }

     /**
     * Get Previous Page number
     *
     * @return int
     */
    public function prev()
    {
        return $this->page - 1;
    }

     /**
     * Set Total Items
     *
     * @param int $totalItems
     * @return $this
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;

        return $this;
    }

     /**
     * Set Items Per Page
     *
     * @param int $itemsPerPage
     * @return $this
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;

        return $this;
    }

     /**
     * bắt đầu Phân trang
     * @return $this
     */
    public function paginate()
    {
        $this->setLastPage();

        return $this;
    }

     /**
     * Set Last Page
     *
     * @return void
     */
    private function setLastPage()
    {
        $this->lastPage = ceil($this->totalItems / $this->itemsPerPage);
    }

}