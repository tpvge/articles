<?php
    require_once __DIR__ .'/connect.php';
    
    function articles()
    {
        global $conn;

        if (isset($_GET['page'])) {
            $page = intval($_GET['page']);
        } else {
            $page = 1;
        }
    
        $limit = 5;
        $offset = ($page * $limit) - $limit;
        
        $res = $conn->query("SELECT count(*) as `c` FROM `articles_table`");
        $row = $res->fetch_assoc();
        $total = intval($row['c']);
    
        $articles = $conn->query("SELECT * FROM `articles_table` LIMIT {$offset}, {$limit}");
        $rows = $articles->fetch_all(MYSQLI_ASSOC);
    
        $pages = ceil($total / $limit);

        return [
            'rows' => $rows,
            'totle' => $total,
            'current' => $page,
            'pages' => $pages,
        ];
    }

    function article()
    {
        global $conn;

        $id = intval($_GET['id']);
        $res = $conn->query("SELECT * FROM `articles_table` where `id` = {$id}");

        return $res->fetch_assoc();
    }
    