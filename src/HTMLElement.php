<?php

/**
 * Documento que define un ejemplo de como será la estructura de una
 * etiqueta HTML en PHP
 *
 * <p attr="value">contenido</p>
 * <tag attr="value">
 *
 */

namespace ITEC\DAW\EPL\HTML;

const EMPTY_TAGS = [
    "area",
    "base",
    "br",
    "col",
    "embed",
    "hr",
    "img",
    "input",
    "keygen",
    "link",
    "meta",
    "param",
    "source",
    "track",
    "wbr"
];

const ATTRIBUTES_TAG = [
    "accept" => ["form", "input"],
    "accept-charset" => ["form"],
    "accesskey" => "global",
    "action" => ["form"],
    "align" => ["applet", "caption", "col", "colgroup", "hr", "iframe", "img", "table", "tbody", "td", "tfoot", "tr"],
    "allow" => ["iframe"],
    "alt" => ["applet", "area", "img", "input"],
    "async" => ["script"],
    "autocapitalize" => "global",
    "autocomplete" => ["form", "input"],
    "autofocus" => ["button", "input", "keygen", "select", "textarea"],
    "autoplay" => ["audio", "video"],
    "autosave" => ["input"],
    "bgcolor" => ["body", "col", "colgroup", "marquee", "table", "tbody", "tfoot", "td", "th", "tr"],
    "border" => ["img", "object", "table"],
    "buffered" => ["audio", "video"],
    "challenge" => ["keygen"],
    "charset" => ["meta", "script"],
    "checked" => ["command", "input"],
    "cite" => ["blockquote", "del", "ins", "q"],
    "class" => "global",
    "code" => ["applet"],
    "codebase" => ["applet"],
    "color" => ["basefont", "font", "hr"],
    "cols" => ["textarea"],
    "colspan" => ["td", "th"],
    "content" => ["meta"],
    "contenteditable" => "global",
    "contextmenu" => "global",
    "controls" => ["audio", "video"],
    "coords" => ["area"],
    "crossorigin" => ["audio", "img", "link", "script", "video"],
    "data" => ["object"],
    "data-*" => "global",
    "datetime" => ["del", "ins", "time"],
    "default" => ["track"],
    "defer" => ["script"],
    "dir" => "global",
    "dirname" => ["input", "textarea"],
    "disabled" => ["button", "command", "fieldset", "input", "keygen", "optgroup", "option", "select", "textarea"],
    "download" => ["a", "area"],
    "draggable" => "global",
    "dropzone" => "global",
    "enctype" => ["form"],
    "for" => ["label", "output"],
    "form" => ["button", "fieldset", "input", "keygen", "label", "meter", "object", "output", "progress", "select", "textarea"],
    "formaction" => ["input", "button"],
    "headers" => ["td", "th"],
    "height" => ["canvas", "embed", "iframe", "img", "input", "object", "video"],
    "hidden" => "global",
    "high" => ["meter"],
    "href" => ["a", "area", "base", "link"],
    "hreflang" => ["a", "area", "link"],
    "http-equiv" => ["meta"],
    "icon" => ["command"],
    "id" => "global",
    "ismap" => ["img"],
    "itemprop" => "global",
    "keytype" => ["keygen"],
    "kind" => ["track"],
    "label" => ["track"],
    "lang" => "global",
    "language" => ["script"],
    "list" => ["input"],
    "loop" => ["audio", "bgsound", "marquee", "video"],
    "low" => ["meter"],
    "manifest" => ["html"],
    "max" => ["input", "meter", "progress"],
    "maxlength" => ["input", "textarea"],
    "media" => ["a", "area", "link", "source", "style"],
    "method" => ["form"],
    "min" => ["input", "meter"],
    "multiple" => ["input", "select"],
    "muted" => ["video"],
    "name" => ["button", "form", "fieldset", "iframe", "input", "keygen", "object", "output", "select", "textarea", "map", "meta", "param"],
    "novalidate" => ["form"],
    "open" => ["details"],
    "optimum" => ["meter"],
    "pattern" => ["input"],
    "ping" => ["a", "area"],
    "placeholder" => ["input", "textarea"],
    "poster" => ["video"],
    "preload" => ["audio", "video"],
    "pubdate" => ["time"],
    "radiogroup" => ["command"],
    "readonly" => ["input", "textarea"],
    "rel" => ["a", "area", "link"],
    "required" => ["input", "select", "textarea"],
    "reversed" => ["ol"],
    "rows" => ["textarea"],
    "rowspan" => ["td", "th"],
    "sandbox" => ["iframe"],
    "scope" => ["th"],
    "scoped" => ["style"],
    "seamless" => ["iframe"],
    "selected" => ["option"],
    "shape" => ["a", "area"],
    "size" => ["input", "select"],
    "sizes" => ["link", "img", "source"],
    "span" => ["col", "colgroup"],
    "spellcheck" => "global",
    "src" => ["audio", "embed", "iframe", "img", "input", "script", "source", "track", "video"],
    "srcdoc" => ["iframe"],
    "srclang" => ["track"],
    "srcset" => ["img"],
    "start" => ["ol"],
    "step" => ["input"],
    "style" => "global",
    "summary" => ["table"],
    "tabindex" => "global",
    "target" => ["a", "area", "base", "form"],
    "title" => "global",
    "type" => ["button", "input", "command", "embed", "object", "script", "source", "style", "menu"],
    "usemap" => ["img", "input", "object"],
    "value" => ["button", "option", "input", "li", "meter", "progress", "param"],
    "width" => ["canvas", "embed", "iframe", "img", "input", "object", "video"],
    "wrap" => ["textarea"]
];

const ATTRIBUTE_VALUES = [
    "accept" => null,
    "accept-charset" => null,
    "accesskey" => null,
    "action" => null,
    "align" => ["left", "right", "center", "justify"],
    "allow" => null,
    "alt" => null,
    "async" => null,
    "autocapitalize" => ["off", "none", "on", "sentences", "words", "characters"],
    "autocomplete" => [
        "off",
        "on",
        "name",
        "honorific-prefix",
        "given-name",
        "additional-name",
        "family-name",
        "honorific-suffix",
        "nickname",
        "email",
        "username",
        "new-password",
        "current-password",
        "one-time-code",
        "organization-title",
        "organization",
        "street-address",
        "address-line1",
        "address-line2",
        "address-line3",
        "address-level4",
        "address-level3",
        "address-level2",
        "address-level1",
        "country",
        "country-name",
        "postal-code",
        "cc-name",
        "cc-given-name",
        "cc-additional-name",
        "cc-family-name",
        "cc-number",
        "cc-exp",
        "cc-exp-month",
        "cc-exp-year",
        "cc-csc",
        "cc-type",
        "transaction-currency",
        "transaction-amount",
        "language",
        "bday",
        "bday-day",
        "bday-month",
        "bday-year",
        "sex",
        "tel",
        "tel-country-code",
        "tel-national",
        "tel-area-code",
        "tel-local",
        "tel-extension",
        "impp",
        "url",
        "photo"
    ],
    "autofocus" => null,
    "autoplay" => null,
    "autosave" => null,
    "bgcolor" => null,
    "border" => null,
    "buffered" => null,
    "challenge" => null,
    "charset" => null,
    "checked" => null,
    "cite" => null,
    "class" => null,
    "code" => null,
    "codebase" => null,
    "color" => null,
    "cols" => null,
    "colspan" => null,
    "content" => null,
    "contenteditable" => ["true", "false"],
    "contextmenu" => null,
    "controls" => null,
    "coords" => null,
    "crossorigin" => ["", "anonymous", "use-credentials"],
    "data" => null,
    "data-*" => null,
    "datetime" => null,
    "default" => null,
    "defer" => null,
    "dir" => ["ltr", "rtl", "auto"],
    "dirname" => null,
    "disabled" => null,
    "download" => null,
    "draggable" => ["true", "false"],
    "dropzone" => null,
    "enctype" => ["application/x-www-form-urlencoded", "multipart/form-data", "text/plain"],
    "for" => null,
    "form" => null,
    "formaction" => null,
    "headers" => null,
    "height" => null,
    "hidden" => null,
    "high" => null,
    "href" => null,
    "hreflang" => null,
    "http-equiv" => null,
    "icon" => null,
    "id" => null,
    "ismap" => null,
    "itemprop" => null,
    "keytype" => ["RSA", "DSA", "EC"],
    "kind" => ["subtitles", "captions", "descriptions", "chapters", "metadata"],
    "label" => null,
    "lang" => null,
    "language" => null,
    "list" => null,
    "loop" => null,
    "low" => null,
    "manifest" => null,
    "max" => null,
    "maxlength" => null,
    "media" => null,
    "method" => ["GET", "POST", "dialog"],
    "min" => null,
    "multiple" => null,
    "muted" => null,
    "name" => null,
    "novalidate" => null,
    "open" => null,
    "optimum" => null,
    "pattern" => null,
    "ping" => null,
    "placeholder" => null,
    "poster" => null,
    "preload" => null,
    "pubdate" => null,
    "radiogroup" => null,
    "readonly" => null,
    "rel" => [
        "alternate",
        "author",
        "bookmark",
        "canonical",
        "external",
        "help",
        "icon",
        "license",
        "manifest",
        "me",
        "modulepreload",
        "next",
        "nofollow",
        "noopener",
        "noreferrer",
        "opener",
        "pingback",
        "preconnect",
        "prefetch",
        "preload",
        "prerender",
        "prev",
        "search",
        "stylesheet",
        "tag",
        "dns-prefetch"
    ],
    "required" => null,
    "reversed" => null,
    "rows" => null,
    "rowspan" => null,
    "sandbox" => null,
    "scope" => null,
    "scoped" => null,
    "seamless" => null,
    "selected" => null,
    "shape" => null,
    "size" => null,
    "sizes" => null,
    "span" => null,
    "spellcheck" => ["true", "false"],
    "src" => null,
    "srcdoc" => null,
    "srclang" => null,
    "srcset" => null,
    "start" => null,
    "step" => null,
    "style" => null,
    "summary" => null,
    "tabindex" => null,
    "target" => ["_blank", "_self", "_parent", "_top"],
    "title" => null,
    "type" => null,
    "usemap" => null,
    "value" => null,
    "width" => null,
    "wrap" => ["hard", "soft", "off"]
];

/**
 * Clase que representa un elemento HTML.
 */
class HTMLElement
{
    /**
     * Nombre de la etiqueta
     */
    private string $name;

    /**
     * Contenido de la etiqueta.
     */
    private array $content;

    /**
     * Array asociativo de atributos.
     */
    private array $attributes;

    /**
     * Es un elemento vacío.
     */
    private bool $empty;


    /**
     * Constructor de la clase.
     *
     * @param string $name Nombre de la etiqueta.
     * @param array $attributes Array asociativo string:string que define los atributos.
     * @param array $content Array de HTMLElement que define el contenido.
     * @param bool $empty Booleano que indica si el elemento es vacío.
     */
    public function __construct(string $name = "p", array $attributes = [], array $content = [])
    {
        $this->name = $name;
        $this->attributes = $attributes;
        $this->empty = $this->isEmptyElement();

        if ($this->empty) {
            $this->content = [];
        } else {
            $this->content = $content;
        }
    }

    private function isEmptyElement(): bool
    {
        return in_array($this->name, EMPTY_TAGS);
    }

    private function checkEmptyContent(): bool
    {
        return !$this->empty;
    }

    private function checkNewAttribute(string $name): bool
    {
        // Comprobar si el nombre del atributo está en la lista
        if (array_key_exists($name, ATTRIBUTES_TAG)) {
            // Si existe, lo consideraremos un atributo global si es un string.
            if (!is_string(ATTRIBUTES_TAG[$name])) {
                // Si no está el nombre de la etiqueta en el array, es que el atributo no es válido.
                return in_array($this->name, ATTRIBUTES_TAG[$name]);
            }

            return true;
        } else {
            // Si no es existe, sólo queda la posibilidad de que sea un atributo data, que siempre empiezan por data-
            // de lo contrario, no es un atributo válido.
            return str_starts_with($name, "data-");
        }
    }

    private function checkAttributeValue(string $name, string $value): bool
    {
        // Damos por hecho que el atributo es válido, por lo que lo contrastamos directamente con el array.
        // Excepto si empieza por data-, en cuyo caso lo damos por bueno.

        if (str_starts_with($name, "data-")) {
            return true;
        }

        if (is_null(ATTRIBUTE_VALUES[$name])) {
            // Si es null, es arbitrario, así que lo damos por bueno directamente.
            return true;
        }

        return in_array($value, ATTRIBUTE_VALUES[$name]);
    }

    /**
     * Obtiene el nombre de la etiqueta.
     *
     * @return string El nombre de la etiqueta.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Añade contenido a la etiqueta.
     *
     * @param array $newContent Array de HTMLElement|string que se va a añadir al contenido de la etiqueta.
     * @return bool true si todo sale bien, false si $newContent no es un array o si alguno de los elementos del array no es una instancia de HTMLElement
     */
    public function addContent(array $newContent): bool
    {
        if (!is_array($newContent)) {
            // Lo ignoramos porque este seguro lo cubre el tipo del argumento.
            return false; // @codeCoverageIgnore
        }

        if (!$this->checkEmptyContent()) {
            return false;
        }

        foreach ($newContent as $item) {
            if (!($item instanceof HTMLElement) && !is_string($item)) {
                return false;
            }
        }

        // por si alguno falla, que no quede a medias.
        foreach ($newContent as $item) {
            array_push($this->content, $item);
        }

        return true;
    }

    /**
     * Añade un atributo a la etiqueta.
     *
     * @param string $name Nombre del atributo
     * @param string $value Valor del atributo
     *
     * @return bool true si se ha añadido bien, false si $name o $value no son string, o si ya existe
     */
    public function addAttribute(string $name, string $value = ""): bool
    {
        if (!is_string($name) || !is_string($value)) {
            // Lo ignoramos porque este seguro lo cubren los tipos de dato.
            return false; // @codeCoverageIgnore
        }

        if (!$this->checkNewAttribute($name, $value)) {
            return false;
        }

        if (array_key_exists($name, $this->attributes)) {
            return false;
        }

        if (!$this->checkAttributeValue($name, $value)) {
            return false;
        }

        $this->attributes[$name] = $value;
        return true;
    }

    /**
     * Elimina un atributo.
     *
     * @param string $name Nombre del atributo a eliminar.
     * @return bool true si se ha eliminado, false si ha pasado algo.
     */
    public function removeAttribute(string $name): bool
    {
        if (!is_string($name)) {
            // Lo ignoramos porque este seguro lo cubre el tipo de dato.
            return false; // @codeCoverageIgnore
        }

        if (!array_key_exists($name, $this->attributes)) {
            return false;
        }

        unset($this->attributes[$name]);
        return true;
    }

    /**
     * Verifica si dos etiquetas tienen el mismo nombre.
     *
     * @param HTMLElement $element Elemento con el que comparar el nombre.
     * @return bool true si los nombre son iguales.
     */
    public function isSameTag(HTMLElement $element): bool
    {
        return $element->getName() === $this->name;
    }

    /**
     * Obtener el código HTML.
     *
     * @return string El código HTML en forma de string.
     */
    public function getHTML(): string
    {
        $result = "";
        $result .= "<"; // <
        $result .= $this->name; // <p

        foreach ($this->attributes as $attribute => $value) {
            $result .= " "; //       "<p "
            $result .= $attribute; // <p attr
            $result .= "="; //        <p attr=
            $result .= "\""; //       <p attr="
            $result .= $value; //     <p attr="value
            $result .= "\""; //       <p attr="value"
        }

        $result .= ">"; //            <p attr="value">

        if (!$this->checkEmptyContent()) {
            return $result; //        <p attr="value">
        }

        foreach ($this->content as $item) {
            if ($item instanceof HTMLElement) {
                $result .= $item->getHTML(); // <p attr="value">content
            } else {
                $result .= $item;
            }
        }

        $result .= "</"; //           <p attr="value">content</
        $result .= $this->name; //    <p attr="value">content</p
        $result .= ">"; //            <p attr="value">content</p>

        return $result;
    }
}
