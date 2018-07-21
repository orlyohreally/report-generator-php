<?php
    require_once 'docxTemplateInPHP/src/Template/Docx/DocxTemplate.php';
    require_once 'docxTemplateInPHP/src/Template/KeyNode.php';
    require_once 'docxTemplateInPHP/src/Template/Exceptions/RepeatListException.php';
    require_once 'docxTemplateInPHP/src/Template/Exceptions/RepeatParagraphException.php';
    require_once 'docxTemplateInPHP/src/Template/Exceptions/RepeatRowException.php';
    require_once 'docxTemplateInPHP/src/Template/Exceptions/RepeatTextException.php';
    
    use icircle\Template\Docx\DocxTemplate;

    $docxTemplate = new DocxTemplate('includes/template.docx');
    $dataArray = array(
        "company" => array(
            "name" => $_POST['company'],
        ),
        "report" => array(
            "number" => $_POST['report_number'],
            "content" => $_POST['report_content'],
            "footnote" => $_POST['content_footnote'],
            "created_at" => date("d.m.Y"),
            "content_2_columns" => $_POST['content_2_columns'],
        ),
        "person" => array(
            "full_name" => $_POST['full_name'],
            "occupation" => $_POST['occupation'],
            "salary" => $_POST['salary'],
        ),
    );
    $docxTemplate->merge($dataArray, 'report.docx');
    $report = 'report.docx';
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment;filename="report.docx"');
    readfile($report);
    unlink('report.docx');
?>