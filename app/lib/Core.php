<?php
class Core
{
    public function __construct()
    {
        $this->GetURL();
    }

    public function GetURL()
    {
        echo $_GET['url'];
    }
}
