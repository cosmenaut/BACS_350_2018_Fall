<?php

    $page_title = "Project #3";
    include "header.php";
    echo "<h1>" . $page_title . "</h2>";
    echo "<p>Help me ... I'm trapped inside this computer.</p>";
    include "footer.php";

?>
<title>
    <?php echo $page_title; ?>
</title>

<h1>
    <?php echo $page_title; ?>
</h1>

<h1>Variables</h1>
<p>
    My Name is
    <?php echo "Inigo Montoya"; ?>
<p>
<?php $first = "Abraham"; $last = "Lincoln" ?>
<p>
    My Name is
    <?php echo $first . $last; ?>
<p>
    <h2>Test Links</h2>
    <ul>
        <li><a href="https://unco-bacs.org/bacs_350/index.php">Class demo server</a></li>
        <li><a href="https://seamansguide.com/guide/PhpApps/Index">Class web server</a></li>
        <li><a href="/index.php">My server</a></li>
        <li><a href="../01">Project #1</a></li>
        <li><a href="../02">Project #2</a></li>
        <li><a href="index.php">Project #3 - index.php</a></li>
        <li><a href=".">Project #3 - directory</a></li>
        <li><a href="page.php">Project #3 - page.php</a></li>
        <li><a href="Bear3.png">Project #3 - Bear Logo</a></li>
        <li><a href="styles.css">Project #3 - styles.css</a></li>
    </ul>