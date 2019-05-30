<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2015/1/28
 * Time: 16:49
 */
?>
<?php include 'include/header.html.php' ?>
    <div id="container">
        <?php include 'include/nav.html.php' ?>
        <div id="content">
            <h2 class="alignCenter"><?php echo $theSubtitle['name']; ?></h2>
            <h3 class="txtCenter">Software Engineering Laboratory Project</h3>
            <h4 class="txtCenter">Grading Policy</h4>
            <p>Your laboratory project will be graded according to the points you gain from the following seven parts:</p>
            <p><span>1. 《Software Requirements Specification》 </span></p>
            <p><span>Due:</span>the 4th week </p>
            <pre>
Minimum requirement of contents:
Introduction (2 points);
User Scenarios(8 points); Data Flow Diagram (7 points); State Diagrams(5 points); Class Diagrams(5 points) and CRC Cards (5 points);
Validation Criteria (15 points).
Concerned points:
The accuracy of the validation criteria: full marks can be obtained if more than 90% of the functions are covered. The acceptance testing of the subsystem version 1.0 will strictly go by the criteria.
The language and style of the document must be uniformed (3 points).
Grading: The full mark = 50 points × number of participants

            </pre>
        </div>
    </div>
<?php include 'include/footer.html.php' ?>