<h1>Country Code Language List</h1>

![lphp](https://github.com/DiiegoAG/country-code-language-list/assets/45045082/fac80572-8021-44a2-ad5d-200c98e37d59)

<p>Library with country's name, language, two-language-code and three-language-code</p><br>
<p>This library contains valid ISO Language Code lower-case two-letter codes as defined by ISO-639, upper-case two-letter codes as defined by ISO-3166.</p>

<h3>Example of data</h3>
<table>
  <tbody>
    <tr><th>Country</th><th>Language</th><th>Two Letter</th><th>Three Letter </th><th>Number (LCID)</th></tr>
    <tr><td>Mexico</td><td>Spanish</td><td>es-MX</td><td>es-MEX</td><td>2058</td></tr>
    <tr><td>United States</td><td>English (United States)</td><td>en-US</td><td>en-USA</td><td>4096</td></tr>
    <tr><td>Chile</td><td>Spanish</td><td>es-CL</td><td>es-CHL</td><td>13322</td></tr>
  </tbody>
</table>

<b>If you want to watch all countries and codes, you can <a href="https://www.fincher.org/Utilities/CountryLanguageList.shtml" _blank>click here</a></b>


<h3>Requeriments</h3>
<p>php >= 7.4 and Laravel >= 8.0</p>

<h3>How to install</h3>

```
composer require diegoarreola/country-code-language-list
```

<h2>How to use</h2>
<h3>Use library</h3>

``` php
use Diegoarreola\CountryCodeLanguageList\CCLL;
```

<h3>Search country information by different methods</h3>

``` php
$CCLL = new CCLL();

$CCLL->searchByName('Mexico');
/* It returns: */
[
  [
    "name":"Mexico",
    "language":"English",
    "two_letter_code":"en-MX",
    "three_letter_code":"en-MEX",
    "locale_id":"4096"
  ],
  [
    "name":"Mexico",
    "language":"Spanish",
    "two_letter_code":"es-MX",
    "three_letter_code":"es-MEX",
    "locale_id":"2058"
  ]
]

$CCLL->searchByLanguage('English');
/* it returns */
[
  [
    "name" => "Albania", 
    "language" => "English", 
    "two_letter_code" => "en-AL", 
    "three_letter_code" => "en-ALB", 
    "locale_id" => "4096" 
  ], 
  [
    "name" => "American Samoa", 
    "language" => "English", 
    "two_letter_code" => "en-AS", 
    "three_letter_code" => "en-ASM", 
    "locale_id" => "4096"
  ], 
  [
    "name" => "Andorra", 
    "language" => "English", 
    "two_letter_code" => "en-AD", 
    "three_letter_code" => "en-AND", 
    "locale_id" => "4096" 
  ], 
]

$CCLL->searchBy2LC('es-MX');
/* it returns */
[
  [
    "name":"Mexico",
    "language":"Spanish",
    "two_letter_code":"es-MX",
    "three_letter_code":"es-MEX",
    "locale_id":"2058"
  ]
]

$CCLL->searchBy3LC('es-MEX');
/* it returns */
[
  [
    "name":"Mexico",
    "language":"Spanish",
    "two_letter_code":"es-MX",
    "three_letter_code":"es-MEX",
    "locale_id":"2058"
  ]
]
```

<h3>Params</h3>

``` php
$CCLL->searchByName(); // => English country name (String), could be lowercase or uppercase like 'United Kingdom' or 'united kingdom'.

$CCLL->searchByLanguage(); // => English language (String), could be lowercase or uppercase like 'Spanish' or 'spanish'.

$CCLL->searchBy2LC(); // => English two language code (String), could be lowercase or uppercase like 'es_MX', 'es_mx', 'ES-MX', 'es-mx'. You can use '-' or '_'.

$CCLL->searchBy3LC(); // => Same method before you can use '-' or '_', uppercase or lowercase.
```

<h3>Contributions</h3>
<p>You can open a pull request if you consider that change can be useful or it can resolve a bug.</p>

<h3>License</h3>
<p>Open source software with MIT license.</p>

<hr>

<p>Author: Diego Alberto Arreola Galván. 🇲🇽</p>










