<?php

require 'itemScore.php';

echo ' 
<h3 class="header">Technologies</h3>
<ul class="collapsible" data-collapsible="accordion">
    <li>
        <div class="collapsible-header"><i class="material-icons left">info_outline</i>My Scoring Criteria<i class="material-icons right">import_export</i></div>
        <div class="collapsible-body">
        <p><b>1 - Experimenting/Relearning:</b> Understood basics of technology or evaluating capabilities and comprehension.</p>
        <p><b>2 - Knowledgeable:</b> Created small- to medium-scale software or leveraged to demonstrate understanding of technology.</p>
        <p><b>3 - Applying:</b> Created software or leveraged to deliverable standard for public, personal, or open-source access.</p>
        <p><b>4 - Producing:</b> Created software or leveraged to industry standards for generating revenue, solving world problem, or enhancing life.</p>
        <p><b>5 - Mastery:</b> With time I will be at this level.</p>
        </div>
    </li>
</ul>
<div class="section" id="tech">
    <div class="row">
        <div class="col s12 m6">
';

echo '
            <table class="bordered centered white z-depth-3">
                <thead>
                    <tr>
                        <th>Languages</th>
                        <th>Score</th>
                        <th>Competency</th>
                    </tr>
                </thead>
                <tbody>
';

$langs = array(
    new itemScore("Java", 4),
    new itemScore("C", 3),
    new itemScore("C++", 2),
    new itemScore("C#", 1),
    new itemScore("Go", 1),
    new itemScore("Bash/Shell Scripting", 4),
    new itemScore("XML/JSON/YAML", 4),
    new itemScore("Python", 2),
    new itemScore("HTML/CSS", 2),
    new itemScore("JavaScript", 1),
    new itemScore("PHP", 1),
    new itemScore("MATLAB", 1),
    new itemScore("LabVIEW", 1)
);

foreach ($langs as $lang) {
                    echo '<tr>';
                        echo '<th><h6>' . $lang->item . '</h6></th>';
                        echo '<td>' . $lang->score . '</td>';
                        echo '<td><div class="progress grey lighten-2"><div class="determinate blue" style="width:' . $lang->score*20 . '%"></div></div></td>';
                    echo '</tr>';
}
            echo '</tbody>
            </table>
        </div>';

echo '
<div class="col s12 m6">
    <table class="bordered centered white z-depth-3">
        <thead>
            <tr>
                <th>Tools</th>
                <th>Score</th>
                <th>Competency</th>
            </tr>
        </thead>
        <tbody>
';

$tools = array(
    new itemScore("AWS", 2),
    new itemScore("Ansible", 4),
    new itemScore("Gradle", 3),
    new itemScore("Agile", 3),
    new itemScore("Linux", 3),
    new itemScore("Unix", 1),
    new itemScore("Windows", 3),
    new itemScore("Docker", 4),
    new itemScore("JUnit", 3),
    new itemScore("Bootstrap", 2),
    new itemScore("Material Design", 2),
    new itemScore("Mesos/Marathon", 3),
    new itemScore("Qt", 2),
    new itemScore("GTK+3", 1),
    new itemScore("TeamCity", 1),
    new itemScore("Apache HTTP Server", 2),
    new itemScore("Technical Writing", 4),
    new itemScore("Version Control", 4),
    new itemScore("Source Code Management", 4),
    new itemScore("Android", 1)
);

foreach ($tools as $tool) {
    echo '<tr>';
    echo '<th><h6>' . $tool->item . '</h6></th>';
    echo '<td>' . $tool->score . '</td>';
    echo '<td><div class="progress grey lighten-2"><div class="determinate blue" style="width:' . $tool->score*20 . '%"></div></div></td>';
    echo '</tr>';
}
echo '</tbody>
    </table>
</div>';


echo '

</div>

</div>'
; ?>
