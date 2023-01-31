<?php 
    // ob_start();
    // require('fpdf/fpdf.php');
    // $e = $variables["pd"]["nom"];

    // $pdf = new FPDF();
    // $pdf->AddPage();
    // $pdf->SetFont('Arial','B',16);
    // $pdf->Image('Views/fpdf/head.png',0,1,150);
    // // $pdf->Cell(-10,60,'Autorisation de poursuite des études universitaires',1);
     
    
    // $pdf->Write(150,$e);
    // $pdf->Output();
    // ob_end_flush();


    ///////////////////////////////////////////
    ob_start();
    require('fpdf/fpdf.php');
    $nom = $variables["pd"]["nom"];
    $prenom = $variables["pd"]["prenom"];
    $matricule = $variables["pd"]["matricule"];
    $grade = $variables["pd"]["grade"];
    $echelle = $variables["pd"]["echelle"];
    $echelon = $variables["pd"]["echelon"];
    $tele = $variables["pd"]["tele"];
    $diplome = $variables["pd"]["diplome"];
    $etablissement = $variables["pd"]["etablissement"];

    // $nom_prenom = strtoupper($stagiaire['nom'] . "  " . $stagiaire['prenom']);


    // $lieu_naiss = strtoupper($stagiaire['lieu_naissance']);
    
    // $cin = strtoupper($stagiaire['cin']);
    
    
    // $num_insc = strtoupper($stagiaire['num_inscription']);
    
    
    
    
    // $filiere = strtoupper($scolarite['Nom_Filiere']);
    
    // $niveau = strtoupper($scolarite['niveau_diplome']);
    
    // $classe = strtoupper($scolarite['classe']);
    
    
    
    //Création d'un nouveau doc pdf (Portrait, en mm , taille A5)
    $pdf = new FPDF('P', 'mm', 'A5');
    
    //Ajouter une nouvelle page
    $pdf->AddPage();
    
    // entete
    $pdf->Image('Views/fpdf/head.png',0,1,150);
    
    // Saut de ligne
    $pdf->Ln(18);
    
    
    // Police Arial gras 16
    $pdf->SetFont('Arial', 'BI', 16);
    
    // Titre
    $pdf->Cell(0, 15, '  Autorisation de poursuite des études universitaires', 'B', 1, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 10, 'Suite à la demande formulé par :', 0, 1, 'C');
    
    // Saut de ligne
    $pdf->Ln(5);
    
    // Début en police Arial normale taille 10
    
    $pdf->SetFont('Arial', '', 11);
    $h = 7;
    $retrait = "     ";
    
    // $pdf->Write($h, "Je soussigné, Directeur de l'établissement CLEVER SCHOOL 2 PRIVEE EL ATTAOUIA Certifie que : \n");
    
    $pdf->Write($h, $retrait."Nom: ".$retrait);
    
    //Ecriture en Gras-Italique-Souligné(U)
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $nom . "\n");
    
    //Ecriture normal
    $pdf->SetFont('', '');
    $pdf->Write($h, $retrait . "Prenom: " .$retrait);
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $prenom . "\n");
    
    $pdf->SetFont('', '');
    $pdf->Write($h, $retrait . "Matricule: " .$retrait);
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $matricule . "\n");

    $pdf->SetFont('', '');
    $pdf->Write($h, $retrait . "Grade: " .$retrait);
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $grade . "\n");

    $pdf->SetFont('', '');
    $pdf->Write($h, $retrait . "Echelle: " .$retrait);
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $echelle. "\n");
   
    $pdf->SetFont('', '');
    $pdf->Write($h, $retrait . "Echelon: " .$retrait);
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $echelon . "\n");

    $pdf->SetFont('', '');
    $pdf->Write($h, $retrait . "Telephone: " .$retrait);
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $tele . "\n");

    $pdf->SetFont('', '');
    
    $pdf->Write($h, "Certifie l'exactitude des renseignements ci-dessus, et autorise l'intéressé(e) à poursuivre ses études universitaires à :  \n");
    
    $pdf->SetFont('', '');
    $pdf->Write($h, $retrait . "Diplome: " .$retrait);
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $diplome . "\n");

    $pdf->SetFont('', '');
    $pdf->Write($h, $retrait . "Etablissement: " .$retrait);
    $pdf->SetFont('', 'BIU');
    $pdf->Write($h, $etablissement . "\n");

    $pdf->Ln(10);

    $pdf->SetFont('','');

    $pdf->Cell(0, 5, $retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait. $retrait.$retrait.$retrait.$retrait.$retrait.$retrait.'A Dakhla, le:' . date('d/m/Y'), 0, 1, 'C');
    
    // Décalage de 20 mm à droite
    // $pdf->Cell(20);
    // $pdf->Cell(80, 8, "Le directeur pédagogique de l'établissement", 0, 1, 'C');
    
    // Décalage de 20 mm à droite
    // $pdf->Cell(20);
    $pdf->Cell(80, 5, "Intéressé:" .$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait.$retrait. "Ressources humaines :", 0, 'C');
    // $pdf->Cell(20);
    // $pdf->Cell(80, 5, ' ', 'LR', 1, 'C'); // LR Left-Right
    // $pdf->Cell(20);
    // $pdf->Cell(80, 5, ' ', 'LR', 1, 'C');
    // $pdf->Cell(20);
    // $pdf->Cell(80, 5, ' ', 'LR', 1, 'C');
    $pdf->Cell(20);
    // $pdf->Cell(80, 5, ' ', 'LRB', 1, 'C'); // LRB : Left-Right-Bottom (Bas)
    
    //Afficher le pdf
    $pdf->Output('', '', true);
    ob_end_flush();
?>
