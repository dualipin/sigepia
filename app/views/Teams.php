<?php

// Define the project name and team members
$projectName = "Sigepia";
$teamMembers = [
    ["name" => "Alice Johnson", 'role' => 'estudiante'],
    ["name" => "Bob Smith", 'role' => 'estudiante'],
    ["name" => "Charlie Brown", 'role' => 'estudiante'],
    [
        "name" => "Diana Prince",
        'role' => 'estudiante'
    ],
    ["name" => "Bob Smith", 'role' => 'estudiante'],
    ["name" => "Bob Smith", 'role' => 'estudiante'],
    ["name" => "Charlie Brown", 'role' => 'estudiante'],
    [
        "name" => "Diana Prince",
        'role' => 'estudiante'
    ],
    ["name" => "Charlie Brown", 'role' => 'estudiante'],
    ["name" => "Bob Smith", 'role' => 'estudiante'],
    ["name" => "Charlie Brown", 'role' => 'estudiante'],
    [
        "name" => "Diana Prince",
        'role' => 'estudiante'
    ],
    [
        "name" => "Diana Prince",
        'role' => 'estudiante'
    ],

    ["name" => "Bob Smith", 'role' => 'estudiante'],
    ["name" => "Charlie Brown", 'role' => 'estudiante'],
    [
        "name" => "Diana Prince",
        'role' => 'estudiante'
    ],
];

?>

<div class="container">
    <h1 class="display-4">Proyecto:
        <span class="fw-semibold">
            <?php echo htmlspecialchars($projectName); ?>
        </span>
    </h1>

    <h2 class="mt-4">Participantes</h2>
    <ul class="list-group">
        <?php foreach ($teamMembers as $member): ?>
            <li class="list-group-item">
                <?php echo htmlspecialchars($member['name']); ?> - <?php echo htmlspecialchars($member['role']); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>