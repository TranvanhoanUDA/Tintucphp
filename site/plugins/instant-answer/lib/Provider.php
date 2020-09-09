<?php

namespace inbefore\plugins\InstantAnswer;

class Provider
{

    protected $answers = [
        'showUserIP'    => 'what is my ip|my ip|show ip',
        'showLocalTime' => 'current time|time|local time',
        'showUserAgent' => 'what is my ua|my useragent|useragent|user agent|my browser|my browser info',
    ];


    public function suggest($q, array $engine)
    {
        $isDefaultEngine = (int) get_option('default_engine') === (int) $engine['engine_id'];

        if (!$isDefaultEngine) {
            return;
        }

        $q = mb_strtolower(sp_strip_tags($q, true));

        foreach ($this->answers as $callback => $trigger) {
            if (preg_match('/^' . $trigger . '$/ui', $q, $match)) {
                return $this->{$callback}($match);
            }
        }

        return false;
    }

    protected function showUserIP()
    {
        $data = [
            'ia_title' => 'Your Public IP Address',
            'ia_body' => app()->request->getIp(),
            'ia_body_class' => 'text-muted',
        ];

        return insert('ia::answer.php', $data);
    }
    protected function showUserAgent()
    {
        $data = [
            'ia_title' => 'Your Browser\'s Useragent',
            'ia_body' => app()->request->headers->get('HTTP_USER_AGENT'),
            'ia_body_class' => 'text-muted',
        ];

        return insert('ia::answer.php', $data);
    }
    protected function showLocalTime()
    {
        $data = [
            'ia_title' => 'Current Time',
            'ia_body_class' => 'text-muted',
        ];

        return insert('ia::clock.php', $data);
    }
}
