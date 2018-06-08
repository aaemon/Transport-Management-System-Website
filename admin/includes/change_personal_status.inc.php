<?php

require_once 'dbh.inc.php';

if(isset($_POST['submit'])) {
    $user_uid = $_POST['user_uid'];
    $status = $_POST['status'];
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $form_no = $_POST['form_no'];
if($status == 2) {
        $sql = "DELETE FROM personal_req WHERE form_no = '$form_no';";
        mysqli_query($conn, $sql);
        header("Location: ../admin_rejected_personal_forms.php?form=deleted");
        exit();
    }
else if($status == 3) {
        $sql = "UPDATE personal_req SET status = '$status' WHERE form_no = '$form_no';";
        mysqli_query($conn, $sql);
        
        //sent mail as rejected
        $to = $user_email;
        $subject = 'Request Rejected';
        $message_body = 'Hello,' .$user_name .',
        
Sorry, your application (Personal Requisition Form) has been rejected.
    
Thank you';
           
        $header = 'From: transport.cuetwebprojects.com'; 
        mail($to, $subject, $message_body, $header);

        header("Location: ../admin_rejected_personal_forms.php?form=deleted");
        exit();
        }
    
else if($status == 1) {
        $sql = "UPDATE personal_req SET status = '$status' WHERE form_no = '$form_no';";
        mysqli_query($conn, $sql);

    //sent mail as accepted
    $to = $user_email;
    $subject = 'Request Accepted';
    $message_body = 'Hello,' .$user_name .',
    
Congratulations, your application (Personal Requisition Form) has been accepted.

Thank you';
       
    $header = 'From: transport.cuetwebprojects.com'; 
    mail($to, $subject, $message_body, $header);
    header("Location: ../admin_accepted_personal_forms.php?form=accepted");
    exit(); 
    
    
    }
    else if($status == 0) {
        $sql = "UPDATE personal_req SET status = '$status' WHERE form_no = '$form_no';";
        mysqli_query($conn, $sql);
        header("Location: ../admin_personal_forms.php?form=pending");
        exit();

    }

}
else if(isset($_POST['create'])) {
    $form_no = $_POST['form_no'];
    $datee = $_POST['datee'];
    $user_name = $_POST['user_name'];
    $user_uid = $_POST['user_uid'];
    $user_dep = $_POST['user_dep'];
    $user_rank = $_POST['user_rank'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $reason = $_POST['reason'];
    $jtype = $_POST['jtype'];
    $vtype = $_POST['vtype'];
    $jplace = $_POST['jplace'];
    $eta = $_POST['eta'];
    $rtime = $_POST['rtime'];
    $splace = $_POST['splace'];
    $jdate = $_POST['jdate'];
    $stime = $_POST['stime'];
    $status = $_POST['status'];

    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Times','B',14);

    $pdf->Cell(95, 8, "CHITTAGONG UNIVERSITY OF ENGINEERING & TECHNOLOGY",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "TRANSPORT SECTION",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "PERSONAL REQUISITION FORM",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "USER'S COPY",'C', 1);
    $pdf->Ln();

    $pdf->SetFont('Times','',12);
    $pdf->Cell(45,12,"Form No: ",1);
    $pdf->Cell(145,12,$form_no,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Date: ",1);
    $pdf->Cell(145,12,$datee,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"User Name: ",1);
    $pdf->Cell(145,12,$user_name,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"User ID: ",1);
    $pdf->Cell(145,12,$user_uid,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Department: ",1);
    $pdf->Cell(145,12,$user_dep,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Rank: ",1);
    $pdf->Cell(145,12,$user_rank,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Phone: ",1);
    $pdf->Cell(145,12,$user_phone,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Email: ",1);
    $pdf->Cell(145,12,$user_email,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Reason: ",1);
    $pdf->Cell(145,12,$reason,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Type: ",1);
    $pdf->Cell(145,12,$jtype,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Vehicle Type: ",1);
    $pdf->Cell(145,12,$vtype,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Place: ",1);
    $pdf->Cell(145,12,$jplace,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Estimated Time: ",1);
    $pdf->Cell(145,12,$eta,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Return Time: ",1);
    $pdf->Cell(145,12,$rtime,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Starting Place: ",1);
    $pdf->Cell(145,12,$splace,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Date: ",1);
    $pdf->Cell(145,12,$jdate,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Starting Time ",1);
    $pdf->Cell(145,12,$stime,1);
    $pdf->Ln();



    $pdf->AddPage();
    $pdf->SetFont('Times','B',14);

    $pdf->Cell(95, 8, "CHITTAGONG UNIVERSITY OF ENGINEERING & TECHNOLOGY",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "TRANSPORT SECTION",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "PERSONAL REQUISITION FORM",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "OFFICE COPY",'C', 1);
    $pdf->Ln();

    $pdf->SetFont('Times','',12);
    $pdf->Cell(45,12,"Form No: ",1);
    $pdf->Cell(145,12,$form_no,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Date: ",1);
    $pdf->Cell(145,12,$datee,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"User Name: ",1);
    $pdf->Cell(145,12,$user_name,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"User ID: ",1);
    $pdf->Cell(145,12,$user_uid,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Department: ",1);
    $pdf->Cell(145,12,$user_dep,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Rank: ",1);
    $pdf->Cell(145,12,$user_rank,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Phone: ",1);
    $pdf->Cell(145,12,$user_phone,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Email: ",1);
    $pdf->Cell(145,12,$user_email,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Reason: ",1);
    $pdf->Cell(145,12,$reason,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Type: ",1);
    $pdf->Cell(145,12,$jtype,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Vehicle Type: ",1);
    $pdf->Cell(145,12,$vtype,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Place: ",1);
    $pdf->Cell(145,12,$jplace,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Estimated Time: ",1);
    $pdf->Cell(145,12,$eta,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Return Time: ",1);
    $pdf->Cell(145,12,$rtime,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Starting Place: ",1);
    $pdf->Cell(145,12,$splace,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Date: ",1);
    $pdf->Cell(145,12,$jdate,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Starting Time ",1);
    $pdf->Cell(145,12,$stime,1);
    $pdf->Ln();




    $pdf->AddPage();
    $pdf->SetFont('Times','B',14);

    $pdf->Cell(95, 8, "CHITTAGONG UNIVERSITY OF ENGINEERING & TECHNOLOGY",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "TRANSPORT SECTION",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "PERSONAL REQUISITION FORM",'C');
    $pdf->Ln();
    $pdf->Cell(95, 8, "MAIN-GATE COPY",'C', 1);
    $pdf->Ln();

    $pdf->SetFont('Times','',12);
    $pdf->Cell(45,12,"Form No: ",1);
    $pdf->Cell(145,12,$form_no,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Date: ",1);
    $pdf->Cell(145,12,$datee,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"User Name: ",1);
    $pdf->Cell(145,12,$user_name,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"User ID: ",1);
    $pdf->Cell(145,12,$user_uid,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Department: ",1);
    $pdf->Cell(145,12,$user_dep,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Rank: ",1);
    $pdf->Cell(145,12,$user_rank,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Phone: ",1);
    $pdf->Cell(145,12,$user_phone,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Email: ",1);
    $pdf->Cell(145,12,$user_email,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Reason: ",1);
    $pdf->Cell(145,12,$reason,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Type: ",1);
    $pdf->Cell(145,12,$jtype,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Vehicle Type: ",1);
    $pdf->Cell(145,12,$vtype,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Place: ",1);
    $pdf->Cell(145,12,$jplace,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Estimated Time: ",1);
    $pdf->Cell(145,12,$eta,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Return Time: ",1);
    $pdf->Cell(145,12,$rtime,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Starting Place: ",1);
    $pdf->Cell(145,12,$splace,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Journey Date: ",1);
    $pdf->Cell(145,12,$jdate,1);
    $pdf->Ln();
    $pdf->Cell(45,12,"Starting Time ",1);
    $pdf->Cell(145,12,$stime,1);
    $pdf->Ln();

    
    $pdf->Output();
    
}
else die;