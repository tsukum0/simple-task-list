$nomention $time[America/Fortaleza]
$c[?# Content Lower]
$var[0;$toLowercase[$message]]
$var[¶§∆.count;1]
$var[¶§∆;$replaceText[$repeatMessage[10;$repeatMessage[10;$repeatMessage[10;0000]]];0;;$sub[4000;$argCount[$message]]]]
$var[¶§∆;$replaceText[$var[¶§∆];0;$c[! CODE !] %{DOL}%var[%{DOL}%var[¶§∆.count\]\;%{DOL}%toLowercase[%{DOL}%message[%{DOL}%var[¶§∆.count\]\]\]\] %{DOL}%var[¶§∆.count\;%{DOL}%sum[1\;%{DOL}%var[¶§∆.count\]\]\] $c[! CODE !];-1]]
$eval[$var[¶§∆]]

$if[$checkContains[ anotar ; $var[1] ]]
    $if[$isNumber[$var[2]]]
        $var[timestamp;$multi[$var[2];86400]]
        $var[timestamp;$sum[$getTimestamp;$var[timestamp];86400]]
        $else
        $var[timestamp;$sum[$getTimestamp;86400]]
    $endif

    $textSplit[$message;$message[1] $message[2]]
    $var[cropText;$splitText[>]]

    $var[count;$getVar[rom1]]

    $jsonParse[$getVar[mem1]]
    $jsonSet[$var[count];n;$var[cropText]]
    $jsonSet[$var[count];t;$var[timestamp]]

    $setVar[mem1;$jsonStringify]
    $setVar[rom1;$sum[$getVar[rom1];1]]
    $c[!!! HACK HACK !!!]
    $c[That's a huge horrible hack to cover the ID of the object]

$endif
