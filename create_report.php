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
        "name" => $_GET['company'],
    ),
    "report" => array(
        "number" => $_GET['report_number'],
        "content" => $_GET['report_content'],
        "footnote" => $_GET['content_footnote'],
        "created_at" => date("d.m.Y"),
        "content_2_columns" => $_GET['content_2_columns'],
    ),
    "person" => array(
        "full_name" => $_GET['full_name'],
        "occupation" => $_GET['occupation'],
        "salary" => $_GET['salary'],
    ),
);
$docxTemplate->merge($dataArray, 'report.docx');
?>