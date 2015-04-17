<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$filepath = './out.csv';
$f = file_get_contents($filepath);
$datas = array();

$lines = explode("\n", $f);
array_shift($lines);
foreach ($lines as $i => $line) {
    $datas[] = explode(",", $line);
}


$t = strtotime($datas[0][0]);
$end = strtotime(end($datas)[0]);
while (true) {
    list($y, $m, $d) = explode('/', date('Y/m/d', $t));
    @$activity[$y][$m][$d] = array();
#     echo $t . ',' . $end;
    if ($t == $end) {
        break;
    }
    $t += 86400;
}

$leasts = array();
foreach ($datas as $data) {
    if (count($data) != 4) {
        continue;
    }
    list($date, $time, $place, $code) = $data;
    $a = array(
        'date' => $date,
        'time' => $time,
        'place' => $place,
        'code' => $code,
    );
    $is_in = !mb_strpos($place, "退室");
    list($y, $m, $d) = explode('/', $date);
    @$activity[$y][$m][$d][] = $a;
} ?>
<?php foreach ($activity as $y => $mds) { ?>
    <h2><?= $y ?>年</h2>
    <?php foreach ($mds as $m => $ds) { ?>
        <h3><?= $m ?>月</h3>
        <ul>
            <?php foreach ($ds as $d => $logs) {
                if (!empty($logs)) {
                    $is_least = @$leasts[$y][$m][$d] = !mb_strpos(end($logs)['place'], "退室");
                } ?>
                <li>
                    <h4><?= $d ?>日</h4>
                    <ul>
                        <?php foreach ($logs as $i => $log) {
                            $in = !mb_strpos($log['place'], "退室");
                            preg_match('#(.)号館#u', $log['place'], $ma);
                            $p = @$ma[1] ?: 0;
                            ?>
                            <li>
                                <?= $p . ($in ? 'in' : 'out') ?>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
<?php } ?>
<?php

echo '<pre>';
foreach ($leasts as $y => $mds) {
    foreach ($mds as $m => $ds) {
        echo $m;
        foreach ($ds as $day) {
            echo $day ? "■" : "□";
        }
        echo PHP_EOL;
    }
}
