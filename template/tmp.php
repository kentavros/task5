<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
    <title>Task 5</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="#">Task 5 -Interface- SESSION, COOKIE, SQL->MySQL, SQL->PGSQL</a>
        </div>
    </div>
</nav>
<div class="container center-block ">
    <div class="starter-template text-center">
        <?=$msg? $msg : ''?>
        <table class="table container" style="width: 800px">
            <tr>
                <th class="text-center alert-info " >COOKIE</th>
            </tr>
        </table>
        <table class="table container text-center table-hover" style="width: 800px">
            <tr>
                <td style="width: 400px">
                    Save the data in cookie
                    key=user6; $val=data user6:
                </td>
                <td>COOKIE = <?=$getCoo? $getCoo : NO_COOKIE ?></td>
            </tr>
            <tr>
                <td style="width: 400px">
                    Get dat from the cookie
                    where key = user6:
                </td>
                <td><?=$getCoo? $getCoo : NO_COOKIE ?></td>
            </tr>
            <tr>
                <td>
                    Delete cookie where key = user6:
                </td>
                <td><?=$_COOKIE[KEY]? $_COOKIE[KEY] : DEL_COOKIE ?></td>

        </table>
        <div class="alert-success">
            -
        </div>
        <br />
        <table class="table container" style="width: 800px">
            <tr>
                <th class="text-center alert-info " >SESSION</th>
            </tr>
        </table>
        <table class="table container text-center table-hover" style="width: 800px">
            <tr>
                <td style="width: 400px">
                    Save the data in session
                    key=user6; $val=data user6:
                </td>
                <td>SESSION = <?=$getSess? $getSess : NO_SESSION ?></td>
            </tr>
            <tr>
                <td style="width: 400px">
                    Get dat from the session
                    where key = user6:
                </td>
                <td><?=$getSess? $getSess : NO_SESSION ?></td>
            </tr>
            <tr>
                <td>
                    Delete session where key = user6:
                </td>
                <td><?=$_SESSION[KEY]? $_SESSION[KEY] : DEL_SESSION ?></td>
            </tr>
        </table>
        <div class="alert-success">
            -
        </div>
        <br />
        <table class="table container" style="width: 800px">
            <tr>
                <th class="text-center alert-info" >PostgreSQL</th>
            </tr>
        </table>
        <table class="table container text-center  table-hover" style="width: 800px">
            <tr>
                <td style="width: 400px">
                    Save data in PgSQL DB
                    key=user6; $val=data user6:
                </td>
                <td><?php if (isset($getPg)){foreach ($getPg as $v) {echo "key=".$v['key']." val=".$v['data'];}}?></td>
            </tr>
            <tr>
                <td style="width: 400px">
                    Get dat from the PgSQL where key = user6:
                </td>
                <td><?php if (isset($getPg)){foreach ($getPg as $v) {echo "key=".$v['key']." val=".$v['data'];}}?></td>
            </tr>
            <tr>
                <td>
                    Delete data where key = user6:
                </td>
                <td><?=!$getPgDel? DEL_BD :ERROR_DEL ?></td>
            </tr>

        </table>

        <div class="alert-success">
            -
        </div>
        <br />
        <table class="table container" style="width: 800px">
            <tr>
                <th class="text-center alert-info" >MySQL</th>
            </tr>
        </table>
        <table class="table container text-center  table-hover" style="width: 800px">
            <tr>
                <td style="width: 400px">
                    Save data in MySQL DB
                    key=user6; $val=data user6:
                </td>
                <td><?php if (isset($getMy)){foreach ($getMy as $v) {echo "key=".$v['key']." val=".$v['data'];}}?></td>
            </tr>
            <tr>
                <td style="width: 400px">
                    Get dat from the MySQL where key = user6:
                </td>
                <td><?php if (isset($getMy)){foreach ($getMy as $v) {echo "key=".$v['key']." val=".$v['data'];}}?></td>
            </tr>
            <tr>
                <td>
                    Delete data where key = user6:
                </td>
                <td><?=!$getMyDel? DEL_BD :ERROR_DEL ?></td>
            </tr>

        </table>
    </div>
</div>

<footer class="modal-footer navbar-inverse">
    <div class="container">
        <p class="text-muted">Task 5 - end</p>
    </div>
</footer>


<!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
<script src="js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>