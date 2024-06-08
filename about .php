<!--/about.php -->
<?php include 'includes/header.php';?>

<main>


<h1>
    about us 
</h1>

<?php 
$team-[

    ["name"=> "jhon Doe", "role" => "CEO"],
    ["name"=> "Jane Star", "role" => "CIO"],
    ["name"=> "Emily jones", "role" => "CFO"],
    ["name"=> "Alia ames", "role" => "Judge"],
];
?>
<h2>
    our team</h2>

    <ul>
        <?php foreach($team as $member);?>
        <li> <? $member ['name']?> - <? $member ['role']?></li>
        <?php endforeach; ?>
</ul>
</main>
<?php include 'includes/footer.php'; ?>
