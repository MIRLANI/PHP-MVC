<?php 


namespace Lani\BelajarPhpMvc;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex()
    {
        $path = "/produk/1234/catagori/abcde";

        $patter = "#^/produk/([0-9a-zA-Z]*)/catagori/([0-9a-zA-Z]*)$#";

        $result = preg_match($patter, $path, $varibel);

        $this->assertEquals(1, $result);
        

        var_dump($varibel);

        array_shift($varibel);

        var_dump($varibel);


    }
}


?>