php-logger
===
just enjoy logging in your browser with color message.

### Usage
```php

    require_once "logger.php";

    Logger::d("hello logger debug");

    Logger::d_var_dump("hello logger debug var dump");

    Logger::e("hello logger Error");

    Logger::e_var_dump("hello logger Error var dump");

    Logger::i("hello logger Info");

    Logger::i_var_dump("hello logger Info var dump");

```

to generate the html 
```html
<span style="color:green">0:58:30 Debug:<br></span>hello logger debug<br><span style="color:green">0:58:30 Debug:<br></span>string(27) "hello logger debug var dump"
<br><span style="color:red">0:58:30 Error:<br></span>hello logger Error<br><span style="color:red">0:58:30 Error:<br></span>string(27) "hello logger Error var dump"
<br><span style="color:blue">0:58:30 Info:<br></span>hello logger Info<br><span style="color:blue">0:58:30 Info:<br></span>hello logger Info var dump<br>

```
