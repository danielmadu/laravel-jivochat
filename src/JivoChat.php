<?php

namespace DanielMadu\JivoChat;


class JivoChat
{
    private $widget_id;

    public function __construct($widget_id)
    {
        $this->widget_id = $widget_id;
    }

    public function render()
    {
        return view('jivochat::jivochat')->with(['widget_id' => $this->widget_id]);
    }
}