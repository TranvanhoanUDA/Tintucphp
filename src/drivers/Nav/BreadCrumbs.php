<?php

namespace spark\drivers\Nav;

/**
* BreadCrumbs Generator
*
* @package spark
*/
class BreadCrumbs
{
    protected $links = [];

    public function add($id, $label, $url)
    {
        $this->links[$id] = [
            'label' => $label,
            'url'   => $url
        ];
        return $this;
    }

    public function remove($id)
    {
        unset($this->links[$id]);
        return $this;
    }

    public function getAll()
    {
        return $links;
    }

    public function renderHtml($before = '', $after = '')
    {
        $links = $this->links;

        if (!is_array($links) || empty($links)) {
            return '';
        }

        $total = count($links);

        if ($total < 2) {
            return '';
        }

        if ($before === '' && $after === '') {
            $before = '<ol class="breadcrumb">';
            $after = '</ol>';
        }

        $breadcrumbs = '';
        $breadcrumbs .= $before;
        $i = 1;


        foreach ($links as $link) {
            $label = html_escape($link['label'], false);
            $url = html_escape($link['url'], false);

            if ($i === $total) {
                $breadcrumbs .= '<li class="breadcrumb-item active">' . $label . '</li>';
            } else {
                $breadcrumbs .= '
                <li class="breadcrumb-item" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="' . $url . '" itemprop="url">
                <span itemprop="title">' . $label . '</span></a>
                </li>';
            }

            $i++;
        }
        $breadcrumbs .= $after;
        return $breadcrumbs;
    }
}
