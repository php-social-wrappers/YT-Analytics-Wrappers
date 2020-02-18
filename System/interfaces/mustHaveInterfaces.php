<?php
namespace YouTubeWrapper\Interfaces;
interface MustHaveInterface{
    function fnSetToken();


    function fnOAuthenticate();
    function fnGetPermissions();
    function fnExecute();
}