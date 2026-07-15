<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Grades</title>
</head>
<body>

    <h1>Students Results</h1>

    <?php

    $students = [
        ["Ahmed", 95],
        ["Mohamed", 82],
        ["Ali", 74],
        ["Sara", 61],
        ["Mona", 48]
    ];

    $passed = 0;
    $failed = 0;
    $totalGrades = 0;

    $highestGrade = $students[0][1];
    $topStudent = $students[0][0];

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>Name</th>
            <th>Grade</th>
            <th>Letter Grade</th>
          </tr>";

    foreach ($students as $student) {

        $name = $student[0];
        $grade = $student[1];

        // Determine Letter Grade
        if ($grade >= 90) {
            $letter = "A";
        } elseif ($grade >= 80) {
            $letter = "B";
        } elseif ($grade >= 70) {
            $letter = "C";
        } elseif ($grade >= 60) {
            $letter = "D";
        } else {
            $letter = "F";
        }

        echo "<tr>
                <td>$name</td>
                <td>$grade</td>
                <td>$letter</td>
              </tr>";

        // Count Passed & Failed
        if ($grade >= 60) {
            $passed++;
        } else {
            $failed++;
        }

        // Sum Grades
        $totalGrades += $grade;

        // Find Highest Grade
        if ($grade > $highestGrade) {
            $highestGrade = $grade;
            $topStudent = $name;
        }
    }

    echo "</table>";

    $average = $totalGrades / count($students);

    echo "<h3>Passed Students: $passed</h3>";
    echo "<h3>Failed Students: $failed</h3>";
    echo "<h3>Average Grade: $average</h3>";
    echo "<h3>Top Student: $topStudent ($highestGrade)</h3>";

    ?>

</body>
</html>