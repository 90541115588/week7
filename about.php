<!-- /about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>About Sonu sito wala</h1><hr>
    <h2><p>The 23-year-old on YouTube,he is a great singer who is popular since this year also he sings at weddings and kabbadi tournaments.</p></h2>
    <?php
    $team = [
        ["name" => "Byg Byrd", "role" => "producer"],
        ["name" => "Sunny Malton", "role" => "rapper"],
        ["name" => "Navkaran Brar", "role" => "manager"],
    ];
    ?>
    <h2> Team Members of Sonu sito wala</h2>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>