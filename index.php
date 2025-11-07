<?php

require_once('./luaslingkaran.php'); //panggil file luaslingkaran.php

use App\Math\luaslingkaran; //panggil namespace

$lingkaran = new luaslingkaran(7);
$lingkaran->tampil('roda');
luaslingkaran::testing();