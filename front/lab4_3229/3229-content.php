<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3229">


    <h1>Benefits of coaching</h1>

    <div class="list-item">
        <div class="col-ct">
            <div class="item">
                
                    <h2>01</h2>
                
                <div class="left">
                    <h3>Schedules</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitrsed diam lon.</p>
                </div>
            </div>
        </div>
        <div class="col-ct">
            <div class="item">
                <h2>02</h2>
                <div class="left">
                    <h3>Organisation</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitrsed diam lon.</p>
                </div>
            </div>
        </div>
        <div class="col-ct">
            <div class="item">
                <h2>03</h2>
                <div class="left">
                    <h3>Save Time</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitrsed diam lon.</p>
                </div>
            </div>
        </div>
        <div class="col-ct">
            <div class="item">
                <h2>04</h2>
                <div class="left">
                    <h3>Save Money</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitrsed diam lon.</p>
                </div>
            </div>
        </div>
    </div>

</div>
