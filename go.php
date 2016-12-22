<?php

$files = [];


foreach(glob('./test/2016*') as $filename){
    $files[] = substr($filename, 7);
    // echo $filename;
}

require __DIR__ . '/simple_html_dom.php';

$mega = [];

$csv = '';

$realT = [];

function parseFile($day) {

    global $mega, $csv, $realT;
    $predicts = [];

    $html = file_get_html(__DIR__ . '/test/' . $day);
    foreach($html->find('.forecast-brief_cols_10') as $element) {
        foreach ($element->find('.forecast-brief__item-temp-day') as $s) {
            $predicts[] = str_replace('−', '-', $s->plaintext);
        }
    }

    $dayDate = date_create_from_format("Y-m-d-H-i", $day);
    $dayDateString = date_format($dayDate, 'Y-m-d H:i:s');
    $dayArr = explode('-', $day);

    if ($dayArr[3] == 14) {
        foreach($html->find('.current-weather__thermometer_type_now') as $s) {
            $realT[] = [
                intval(date_format($dayDate, 'U') . '000'),
                intval(str_replace('−', '-', $s->plaintext))
            ];
        }
    }

    for ($i = 1; $i < count($predicts); $i++) {

        $nextDay = date('Y-m-d', strtotime('+' . $i . ' day', strtotime($dayDateString)));
        $nextDayArr = explode('-', $nextDay);

        $line = [
            'Y' => $dayArr[0],
            'm' => $dayArr[1],
            'd' => $dayArr[2],
            'H' => $dayArr[3],
            'i' => $dayArr[4],
            '_m' => $nextDayArr[1],
            '_d' => $nextDayArr[2],
            '_C' => $predicts[$i]
        ];

        $mega[] = $line;
        $csv .= join(';', array_values($line)) . "\n";
    }

}

foreach ($files as $d) {
    parseFile($d);
}

$predict_area = [];

foreach ($mega as $key_m => $m) {

    $k = date_format(
        date_create_from_format("Y-m-d-H-i",
            $m['Y'].'-'.$m['_m'].'-'.$m['_d'].'-14-25'),
        'U') . '000';

    $mega[$key_m]['U'] = intval($k);

    $kAccurate = date_format(
        date_create_from_format("Y-m-d-H-i",
            $m['Y'].'-'.$m['m'].'-'.$m['d'].'-'.$m['H'].'-'.$m['i']),
        'U') . '000';

    $mega[$key_m]['kAccurate'] = intval($kAccurate);

    if (!array_key_exists($k, $predict_area)) {
        $predict_area[$k] = [100, -100];
    }

    if ($m['_C'] < $predict_area[$k][0]) {
        $predict_area[$k][0] = $m['_C'];
    }

    if ($m['_C'] > $predict_area[$k][1]) {
        $predict_area[$k][1] = $m['_C'];
    }
}

$predict_area_export = [];
foreach ($predict_area as $key => $value) {
    $predict_area_export[] = [
        $key,
        intval($value[0]),
        intval($value[1])
    ];
}

usort($predict_area_export, function ($a, $b) {
    return ($a < $b) ? -1 : 1;
});

file_put_contents('pogoda_yandex.csv', $csv);

file_put_contents('pogoda_yandex.js', 'var yandex = ' . json_encode($mega) . ';');

file_put_contents('pogoda-real.js', 'var real = ' . json_encode($realT) . ';');

file_put_contents('pogoda-ranges.js', 'var ranges = ' . json_encode($predict_area_export) . ';');

