<?php

namespace ITEC\DAW\EPL\HTML\Test;

use PHPUnit\Framework\TestCase;
use ITEC\DAW\EPL\HTML\HTMLElement;

class HTMLElementTest extends TestCase
{
    public function testGetName()
    {
        $prueba = new HTMLElement();
        $prueba2 = new HTMLElement("a");

        $this->assertEquals("p", $prueba->getName());
        $this->assertEquals("a", $prueba2->getName());
    }

    public function DPtestAddContent()
    {
        return [
            "es array" => [
                true,
                ["hello"],
                "<p>hello</p>"
            ],
            "Exception: no es array" => [
                false,
                1234,
                ""
            ],
            "array con htmlelement" => [
                true,
                [
                    new HTMLElement("input"),
                    new HTMLElement("p"),
                    "hola"
                ],
                "<p><input><p></p>hola</p>"
            ],
            "array con elemento invalido" => [
                false,
                [
                    new HTMLElement("input"),
                    new HTMLElement("p"),
                    1234
                ],
                "<p></p>" // no añade nada, pues hay un elemento inválido
            ],
            "Empty: elemento vacío agrega contenido" => [
                false,
                [
                    "string"
                ],
                "<img>"
            ]
        ];
    }

    /**
     * @dataProvider DPtestAddContent
     */
    public function testAddContent($expected, $data, $expectedHTML)
    {
        $prueba = new HTMLElement();

        if (str_starts_with($this->dataName(), "Exception")) {
            $this->expectException("TypeError");
        }

        if (str_starts_with($this->dataName(), "Empty")) {
            $prueba = new HTMLElement("img", [], [], true);
        }

        $this->assertEquals($expected, $prueba->addContent($data));
        $this->assertEquals($expectedHTML, $prueba->getHTML());
    }

    public function testAddAttribute()
    {
        $prueba = new HTMLElement();

        $this->assertTrue($prueba->addAttribute("id", "parrafo"));
        $this->assertFalse($prueba->addAttribute("id", "parrafo"));
        $this->assertEquals('<p id="parrafo"></p>', $prueba->getHTML());

        $this->assertTrue($prueba->addAttribute("data-counter", "3"));
        $this->assertEquals('<p id="parrafo" data-counter="3"></p>', $prueba->getHTML());

        $this->assertFalse($prueba->addAttribute("src", "src no vale para atributo de p"));
        $this->assertEquals('<p id="parrafo" data-counter="3"></p>', $prueba->getHTML());

        $prueba2 = new HTMLElement("a");

        $this->assertTrue($prueba2->addAttribute("target", "_blank"));
        $this->assertEquals('<a target="_blank"></a>', $prueba2->getHTML());

        $prueba3 = new HTMLElement("a");
        $this->assertFalse($prueba3->addAttribute("target", "arbitrario"));
        $this->assertEquals("<a></a>", $prueba3->getHTML());
    }

    public function testRemoveAttribute()
    {
        $prueba = new HTMLElement("p", ["id" => "parrafo"]);

        $this->assertEquals('<p id="parrafo"></p>', $prueba->getHTML());
        $this->assertTrue($prueba->removeAttribute("id"));
        $this->assertEquals('<p></p>', $prueba->getHTML());
        $this->assertFalse($prueba->removeAttribute("id"));
    }

    public function testIsSameTag()
    {
        $prueba = new HTMLElement("body");
        $prueba2 = new HTMLElement("body");
        $prueba3 = new HTMLElement("head");

        $this->assertTrue($prueba->isSameTag($prueba2));
        $this->assertFalse($prueba->isSameTag($prueba3));
    }

    public function testGetHTML()
    {
        $prueba = new HTMLElement("body");

        $this->assertEquals("<body></body>", $prueba->getHTML());

        $prueba->addAttribute("id", "body");
        $this->assertEquals('<body id="body"></body>', $prueba->getHTML());

        $prueba2 = new HTMLElement("img", [], [], true);
        $prueba2->addAttribute("src", "imgurl");
        $this->assertEquals('<img src="imgurl">', $prueba2->getHTML());

        $prueba2->removeAttribute("src");
        $this->assertEquals('<img>', $prueba2->getHTML());

        $prueba2->addAttribute("src", "imgurl");
        $prueba->addContent([$prueba2]);
        $this->assertEquals('<body id="body"><img src="imgurl"></body>', $prueba->getHTML());

        $prueba3 = new HTMLElement("p", [], ["contenido"], false);
        $this->assertEquals('<p>contenido</p>', $prueba3->getHTML());

        $prueba->addContent([$prueba3]);
        $this->assertEquals('<body id="body"><img src="imgurl"><p>contenido</p></body>', $prueba->getHTML());
    }
}
