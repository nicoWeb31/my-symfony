<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{


    /**
     * 
     *@runInSeparateProcess
     * @return void
     */
    public function testHello()
    {
        $_GET['name'] = 'Fabien';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Fabien', $content);
    }
}