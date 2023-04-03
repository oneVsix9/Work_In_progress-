<?php 
include 'connect.php';
$studentID="1910876";

$sql="SELECT plo.ploNum AS ploNum, 
AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
FROM registration_t AS r, answer_t AS ans, question_t AS q, 
co_t AS co, plo_t AS plo
WHERE r.registrationID=ans.registrationID 
AND ans.examID=q.examID
AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
AND q.courseID=co.courseID AND co.ploID=plo.ploID 
AND r.studentID='$studentID'
GROUP BY plo.ploNum,r.studentID";

$plo = mysqli_query($conn,$sql);
// $nums=mysqli_num_rows($query);


                                // while ($data = mysqli_fetch_array($plo)) {

                                //     $plonum []= "PLO" . $data['ploNum'];
                                //     $percent []= $data['percent'];
                                //     echo "$plonum";
                                // };
    foreach($plo as $data){
      $plonum []= "PLO" . $data['ploNum'];
      $percent []= $data['percent'];
    }

       echo json_encode($plonum);                      

// $fet=mysqli_fetch_assoc($query);
// echo $fet[1];

?>