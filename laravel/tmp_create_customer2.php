<?php
require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

\App\Models\Customer::create([
    'name' => 'ManualTest',
    'surname' => 'Auto',
    'birthYear' => 1999,
    'gender' => 'M',
]);

echo "ok\n";
