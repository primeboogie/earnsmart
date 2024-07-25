<?php
header('Content-Type: application/json');

$data = [
    "run" => "__init__.py",
    "params" => [
        "pid" => 011001110,
        "kill_signal" => "SIGTERM"
    ],
    "function" => "run.goKill(self,default);",
    "response" => "Action completed successfully"
];

echo json_encode($data);