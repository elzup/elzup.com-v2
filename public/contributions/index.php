<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$filepath = './out.csv';
$f = file_get_contents($filepath);
$datas = array();

$lib = array('？', '①', '②', '③', '④');

$collib = array('gray', 'blue', '#000159', '#8678ff', '#000088');

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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>入館ログ</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <style>

        #wrap {
            width: 80%;
            margin: 0 auto;
        }
        li {
            list-style: none;
        }

        .days>li {
            display: flex;
            height: 1.0em;
            padding-left: 5px;
            margin-bottom: 3px;
        }

        .title {
            width: 3em;
        }
        .title h4 {
            padding: 0px;
        }
        .least {
            width: 3em;
        }
        .least span {
            background: black;
            color: red;
            padding: 0 2px;
            border-radius: 2px;
        }
        .commits ul {
            display: flex;
            padding-left: 5px;
        }

        .commit {
            border: solid 1px;
            border-left: 0px;
            padding: 1px;
            width: 50px;
            color: white;
            font-size: 9px;
            text-align: center;
            height: 10px;
        }

        .commit.out {
            margin-right: 5px;
            border-radius: 0 5px 5px 0;
        }

        .commit.in {
            margin-left: 5px;
            border-left: solid 1px;
            border-radius: 5px 0 0 5px;
        }

        .commit.b0 {
            background: gray;
        }
        .commit.b1 {
            background: blue;
        }
        .commit.b2 {
            background: #000159;
        }
        .commit.b3 {
            background: #8678ff;
        }
        .commit.b4 {
            background: #000088;
        }
    </style>
</head>
<body>

<div id="wrap">

<?php foreach ($activity as $y => $mds) { ?>
    <h2><?= $y ?>年</h2>
    <?php foreach ($mds as $m => $ds) { ?>
        <h3><?= $m ?>月</h3>
        <ul class="days">
            <?php foreach ($ds as $d => $logs) {
                $pre = false;
                if (!empty($logs)) {
                    $is_least = @$leasts[$y][$m][$d] = !mb_strpos(end($logs)['place'], "退室");
                } ?>
                <li class="flex">
                    <div class="title"><h4><?= $d ?>日</h4></div>
                    <div class="commits">
                        <svg height="20" width="1000">
                            <line x1="0" y1="10" x2="1000" y2="10" style="stroke:black;stroke-width:0.1" />
                            <?php for ($i = 0; $i < 24; $i++) { ?>
                                <line x1="<?= $i * (1000 / 24) ?>" y1="0" x2="<?= $i * (1000 / 24) ?>" y2="20" style="stroke:black;stroke-width:<?= $i % 6 == 0 ? 1.0 : 0.1 ?>" />
                            <?php } ?>
                            <?php
                            $prex = 0;
                            foreach ($logs as $i => $log) {
                                $in = !mb_strpos($log['place'], "退室");
                                preg_match('#(.)号館#u', $log['place'], $ma);
                                list($hr, $min, $sec) = explode(':', $log['time']);
                                $p = @$ma[1] ?: 0;

                                $mw = 1000;
                                $cx = ($mw * $hr / 24) + ($mw / 24 / 60) * $min;
                                if ($i == 0 && @$pre_least) { ?>
                                    <line x1="0" y1="10" x2="<?= $cx ?>" y2="10" style="stroke:<?= $collib[$p] ?>;stroke-width:3" />
                                <?php } else if (count($logs) - 1 == $i && $is_least) { ?>
                                    <line x1="<?= $cx ?>" y1="10" x2="1000" y2="10" style="stroke:<?= $collib[$p] ?>;stroke-width:3" />
                                <?php } elseif (isset($pre) && $pre) { ?>
                                    <line x1="<?= $prex ?>" y1="10" x2="<?= $cx ?>" y2="10" style="stroke:<?= $collib[$p] ?>;stroke-width:3" />
                                <?php } ?>
                                    <circle cx="<?= $cx ?>" cy="10" r="5" stroke="" stroke-width="0" fill="<?= $collib[$p] ?>" />
                                <?php
                                $pre = $in;
                                $prex = $cx;
                            }
                            $pre_least = $is_least;
                            ?>
                            </g>
                        </svg>
                    </div>
                    <div class="least">
                        <?php if ($is_least) { ?>
                            <span>☠</span>
                        <?php } ?>
                    </div>
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
echo '</pre>';
?>
</div>
</body>
</html>
