<?php
require_once "logger-browser.php";


Logger::d("hello logger debug");

Logger::d_var_dump("hello logger debug var dump");

Logger::e("hello logger Error");

Logger::e_var_dump("hello logger Error var dump");

Logger::i("hello logger Info");

Logger::i_var_dump("hello logger Info var dump");


