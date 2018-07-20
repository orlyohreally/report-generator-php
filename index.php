<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "styles.css">
    <title>Report generator</title>
</head>
<body>
<form id = "report_form" method = "GET" action = "create_report.php" target = "blank_">
<header>
    <div id = "div_company">
        <input name = "company" placeholder = "Company name"/>
    </div>
    <h1>Report #<input name = "report_number" type = "text" placeholder = "Fill in report number"></h1>
</header>
<section id = "report">

<label for = "report_content">Report content</label><a href="#content_footnote"><sup>1</sup></a>
    <textarea id = "report_content" name="report_content" placeholder = "Main report text" rows = "5"></textarea>
    <textarea id = "content_2_columns" name="content_2_columns" placeholder = "Text in two columns" rows = "5"></textarea>
    <h1>Personal information</h1>
    <table id = "person">
        <thead>
            <tr>
                <th>Full name</th>
                <th>Occupation</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input name = "full_name" /></td>
                <td><input name = "occupation" /></td>
                <td><input name = "salary" /></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <div id = "div_content_footnote">
    <label for = "content_footnote">Footnote for content</label>
    <textarea id = "content_footnote" name = "content_footnote" placeholder = "Footnote for content" rows = "4"></textarea>
    </div>
</form>
</section>
<section id = "controls">
    <button id = "create_report" type = "button">Create report</button>
</section>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src = "scripts.js"></script>
</body>
</html>
